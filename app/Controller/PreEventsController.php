<?php

App::uses('AppController', 'Controller');
App::uses('CakeEmail', 'Network/Email');
App::uses('Security', 'Utility'); 

class PreEventsController extends AppController {
	public $components = array('Paginator');
	public $helpers = array('Html', 'Form');
	public $uses = array('UnconPreEvent', 'PreEvent');
	public $MAXATTENDEES = 50;

	public function beforeFilter() {
		parent::beforeFilter();
        $this->Auth->allow('register', 'thankyou', 'confirm');
    }

	public function index() {
		$this->Paginator->settings = array(
			);
		
		$data = $this->Paginator->paginate('PreEvent');
		$this->set('data', $data);
	}

	public function register() {


		$hasResume = false;
		if ($this->request->is('post')) {

			// If email is registered in PreEvent
			if (count($this->PreEvent->find('first', array('conditions' => array('PreEvent.email' => $this->request->data['UnconPreEvent']['email'])))) > 0) {
				$this->set('error', "The email address has been registered for this event");{}
				return;
			}

			// Set resume field
			if ($this->request->data['UnconPreEvent']['resume']['size'] !== 0) {
				$source = $this->request->data['UnconPreEvent']['resume']['tmp_name'];
				$filename = $this->request->data['UnconPreEvent']['email'] . '.' . pathinfo($this->request->data['UnconPreEvent']['resume']['name'], PATHINFO_EXTENSION);
				$dest = ROOT . DS . 'app' . DS . 'webroot' . DS . 'uncon-resumes' . DS;
				$this->request->data['UnconPreEvent']['resume'] = 'uncon-resumes' . DS . $filename;
				$hasResume = true;
			} else {
				$this->request->data['UnconPreEvent']['resume'] = null;
			}

			$this->request->data['UnconPreEvent']['hash'] = Security::hash($this->request->data['UnconPreEvent']['email'], 'sha1', true);
			$attendee = $this->UnconPreEvent->find('first', array('conditions' => array('UnconPreEvent.email' => $this->request->data['UnconPreEvent']['email'])));
			if (count($attendee) > 0) {
				// If email is registered in UnconPreEvent
				$this->UnconPreEvent->read(null, $attendee['UnconPreEvent']['id']);
				$this->UnconPreEvent->set($this->request->data);
				if ($this->UnconPreEvent->save()) {
					$fullName = $this->request->data['UnconPreEvent']['first_name'] . ' ' . $this->request->data['UnconPreEvent']['last_name'];
					$this->request->data['UnconPreEvent']['hash'] = Security::hash($this->request->data['UnconPreEvent']['email'], 'sha1', true);
					$link = "www.indonesiancareerexpo.org/PreEvents/confirm/" . $this->request->data['UnconPreEvent']['hash'];


					// Send email
					$Email = new CakeEmail('admin');
					$Email->addHeaders(array('X-MC-Tags' => 'Pre-Event Registration'));
					$Email->from('info@indonesiancareerexpo.org', "Indonesian Career Expo");
					$Email->replyTo('info@indonesiancareerexpo.org', "Indonesian Career Expo");
					$Email->to($this->request->data['UnconPreEvent']['email'], $fullName);
					$Email->subject('ICarE2015 Pre-Event Registration Confirmation');
					$Email->send(h("Thank you for Registering for our Pre-Event\n\nTo confirm you attendance, click on the following link:\n" . $link));
				}
				return $this->redirect('/PreEvents/thankyou');
			} else {
				if ($this->UnconPreEvent->save($this->request->data)) {
					if ($hasResume) {
						move_uploaded_file($source, $dest . $filename);
					}
					$fullName = $this->request->data['UnconPreEvent']['first_name'] . ' ' . $this->request->data['UnconPreEvent']['last_name'];
					$link = $_SERVER['SERVER_NAME'] . "/PreEvents/confirm/" . $this->request->data['UnconPreEvent']['hash'];

					// Send email
					$Email = new CakeEmail('admin');
					$Email->addHeaders(array('X-MC-Tags' => 'Pre-Event Registration'));
					$Email->from('info@indonesiancareerexpo.org', "Indonesian Career Expo");
					$Email->replyTo('info@indonesiancareerexpo.org', "Indonesian Career Expo");
					$Email->to($this->request->data['UnconPreEvent']['email'], $fullName);
					$Email->subject('ICarE2015 Pre-Event Registration Confirmation');
					$Email->send(h("Thank you for Registering for our Pre-Event\n\nTo confirm you attendance, click on the following link:\n" . $link));

					return $this->redirect('/PreEvents/thankyou');
				}
			}
		} else {
			$count = count($this->PreEvent->find('all'));
			if ($count >= $this->MAXATTENDEES) {
				throw new NotFoundException('Start Smart has been fully booked');
			}
		}
	}

	public function confirm($hash) {

		$attendee = $this->UnconPreEvent->find('first', array('conditions' => array('UnconPreEvent.hash' => $hash)));
		if ($attendee === null) {
			throw new NotFoundException();
		} else {

			if ($attendee['UnconPreEvent']['resume'] !== null) {
				$source = ROOT . DS . 'app' . DS . 'webroot' . DS . $attendee['UnconPreEvent']['resume'];
				$filename = $attendee['UnconPreEvent']['email'] . '.' . pathinfo($attendee['UnconPreEvent']['resume'], PATHINFO_EXTENSION);
				$dest = ROOT . DS . 'app' . DS . 'webroot' . DS . 'resumes' . DS . $filename;
				$attendee['UnconPreEvent']['resume'] = 'resumes' . DS . $filename;
			}
			$id = $attendee['UnconPreEvent']['id'];
			unset($attendee['UnconPreEvent']['id']);
			if ($this->PreEvent->save($attendee['UnconPreEvent'])) {
				// Copy resume to /app/webroot/resumes
				if ($attendee['UnconPreEvent']['resume'] !== null) {
					copy($source, $dest);

					// Delete uncon files
					unlink($source);
				}
				$this->UnconPreEvent->delete($this->request->data($id));

				// Send an email to notify confirmation
				$fullName = $attendee['UnconPreEvent']['first_name'] . ' ' . $attendee['UnconPreEvent']['last_name'];
				$Email = new CakeEmail('admin');
				$Email->addHeaders(array('X-MC-Tags' => 'Pre-Event Registration'));
				$Email->from('info@indonesiancareerexpo.org', "Indonesian Career Expo");
				$Email->replyTo('info@indonesiancareerexpo.org', "Indonesian Career Expo");
				$Email->to($attendee['UnconPreEvent']['email'], $fullName);
				$Email->subject('ICarE2015 Pre-Event Registration Confirmed');
				$Email->send(h("You have been confirmed for attendance to Indonesian Career Expo's Pre-Event!\n\n Details:\n Name: " . $fullName . "\nEmail: " .  $attendee['UnconPreEvent']['email']));
			}
		}
		$this->set('attendee', $attendee);
	}

	public function resumes($hash) {

		$attendee = $this->PreEvent->find('first', array('conditions' => array('PreEvent.hash' => $hash)));
		$resume = $attendee['PreEvent']['resume'];

		
        $this->viewClass = 'Media';
        $params = array(
            'id'        => $resume,
            'name'      => $attendee['PreEvent']['email'],
            'download'  => false,
            'extension' => pathinfo($resume, PATHINFO_EXTENSION),
            'path'      => 'webroot' . DS
        );
        $this->set($params);
	}

	public function thankyou() {}
}
?>