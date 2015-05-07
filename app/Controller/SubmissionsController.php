<?php

App::uses('AppController', 'Controller');
App::uses('CakeEmail', 'Network/Email');
App::uses('Security', 'Utility'); 

class SubmissionsController extends AppController {
	public $components = array('Paginator');
	public $helpers = array('Html', 'Form');
	public $uses = array('UnconSubmission', 'Submission');

	public $compEmails = array(
		"comp_1" => array(
			"name" => "ANZ Bank",
			"email" => "recruitment.indonesia@anz.com"
		),
		"comp_2" => array(
			"name" => "Permata Bank",
			"email" => "samarta@permatabank.co.id",
		),
		"comp_3" => array(
			"name" => "Commonwealth Life",
			"email" => "hrd@commlife.co.id",
		),
		"comp_4" => array(
			"name" => "AXA Insurance",
			"email" => "marcella.juanita@axa.co.id",
		),
		"comp_5" => array(
			"name" => "SCTV",
			"email" => "nova.carmeliya@scm.co.id",
		),
	);

	public function beforeFilter() {
		parent::beforeFilter();
        $this->Auth->allow('register', 'thankyou', 'confirm');
    }

	public function register() {
		if ($this->request->is('post')) {
			/* CAPTCHA HANDLER */
			if(isset($this->request->data['g-recaptcha-response'])){
				$captcha = $this->request->data['g-recaptcha-response'];
	        }
			if(!$captcha){
	        	$this->set('error', "Please fill in the CAPTCHA form.");
	        	return;
	        }
	        $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6Lf5OAYTAAAAAD92wp6oFa9XWDfrqP4QeFEcVyvJ&response=".$captcha."&remoteip=".$_SERVER['REMOTE_ADDR']);
	        if (is_array($response) && $response['success'] == false) {
	        	$this->set('error', "Spammer alert!");
	        	return;
	        }

			// Set resume field

			$source = $this->request->data['UnconSubmission']['resume']['tmp_name'];
			$filename = $this->request->data['UnconSubmission']['email'] . '.' . pathinfo($this->request->data['UnconSubmission']['resume']['name'], PATHINFO_EXTENSION);
			$dest = ROOT . DS . 'app' . DS . 'webroot' . DS . 'uncon-sub-resumes' . DS;

			if ($this->request->data['UnconSubmission']['resume']['size'] === 0) {
				$this->set('error', "Please attach your CV!");
	        	return;
			}
			else $this->request->data['UnconSubmission']['resume'] = 'uncon-sub-resumes' . DS . $filename;
			
			// Set hash value
			$this->request->data['UnconSubmission']['hash'] = Security::hash($this->request->data['UnconSubmission']['email'], 'sha1', true);

			$attendee = $this->UnconSubmission->find('first', array('conditions' => array('UnconSubmission.email' => $this->request->data['UnconSubmission']['email'])));

			if (count($attendee) > 0) {
				// If email is registered in UnconSubmission
				$this->UnconSubmission->read(null, $attendee['UnconSubmission']['id']);
				$this->UnconSubmission->set($this->request->data);
				if ($this->UnconSubmission->save()) {
					$fullName = $this->request->data['UnconSubmission']['first_name'] . ' ' . $this->request->data['UnconSubmission']['last_name'];
					$this->request->data['UnconSubmission']['hash'] = Security::hash($this->request->data['UnconSubmission']['email'], 'sha1', true);
					$link = "www.indonesiancareerexpo.org/Submissions/confirm/" . $this->request->data['UnconSubmission']['hash'];

					// Send email
					$Email = new CakeEmail('admin');
					$Email->addHeaders(array('X-MC-Tags' => 'ICarE2015 CV Submit'));
					$Email->from('info@indonesiancareerexpo.org', "Indonesian Career Expo");
					$Email->replyTo('info@indonesiancareerexpo.org', "Indonesian Career Expo");
					$Email->to($this->request->data['UnconSubmission']['email'], $fullName);
					$Email->subject('ICarE2015 CV Submit Confirmation');
					$Email->send(h("Thank you for submitting your CV.\n\nTo confirm your submission, click on the following link:\n" . $link));
				}
				return $this->redirect('/Submissions/thankyou');
			} else {
				// If email is NOT registered in UnconSubmission, create a new UnconSubmission entry
				if ($this->UnconSubmission->save($this->request->data)) {
					move_uploaded_file($source, $dest . $filename);
					$fullName = $this->request->data['UnconSubmission']['first_name'] . ' ' . $this->request->data['UnconSubmission']['last_name'];
					$link = $_SERVER['SERVER_NAME'] . "/Submissions/confirm/" . $this->request->data['UnconSubmission']['hash'];

					// Send email
					$Email = new CakeEmail('admin');
					$Email->addHeaders(array('X-MC-Tags' => 'ICarE 2015 CV Submission'));
					$Email->from('info@indonesiancareerexpo.org', "Indonesian Career Expo");
					$Email->replyTo('info@indonesiancareerexpo.org', "Indonesian Career Expo");
					$Email->to($this->request->data['UnconSubmission']['email'], $fullName);
					$Email->subject('ICarE 2015 CV Submission Confirmation');
					$Email->send(h("Thank you for submitting your CV.\n\nTo confirm your submission, click on the following link:\n" . $link));

					return $this->redirect('/Submissions/thankyou');
				}
			}
		} else {
		}
	}

	public function confirm($hash) {

		$attendee = $this->UnconSubmission->find('first', array('conditions' => array('UnconSubmission.hash' => $hash)));
		if ($attendee === null) {
			throw new NotFoundException();
		} else {

			// Resume Location on server	
			$source = ROOT . DS . 'app' . DS . 'webroot' . DS . $attendee['UnconSubmission']['resume'];
			$filename = $attendee['UnconSubmission']['email'] . '.' . pathinfo($attendee['UnconSubmission']['resume'], PATHINFO_EXTENSION);
			$dest = ROOT . DS . 'app' . DS . 'webroot' . DS . 'sub-resumes' . DS . $filename;
			$attendee['UnconSubmission']['resume'] = 'sub-resumes' . DS . $filename;
			
			$id = $attendee['UnconSubmission']['id'];
			unset($attendee['UnconSubmission']['id']);

			$comps = array(
				"comp_1" => $attendee['UnconSubmission']['comp_1'],
				"comp_2" => $attendee['UnconSubmission']['comp_2'],
				"comp_3" => $attendee['UnconSubmission']['comp_3'],
				"comp_4" => $attendee['UnconSubmission']['comp_4'],
				"comp_5" => $attendee['UnconSubmission']['comp_5'],
			);

			if ($this->Submission->save($attendee['UnconSubmission'])) {
				// Copy resume to /app/webroot/resumes
				copy($source, $dest);
				unlink($source);
				$this->UnconSubmission->delete($id);
				$fullName = $attendee['UnconSubmission']['first_name'] . ' ' . $attendee['UnconSubmission']['last_name'];

				// Send email to each Company rep
				foreach ($comps as $comp_name => $comp_int) {
					if ($comp_int) {
						$Email = new CakeEmail('admin');
						$Email->addHeaders(array('X-MC-Tags' => 'ICarE 2015 CV Submission'));
						$Email->from('info@indonesiancareerexpo.org', "Indonesian Career Expo");
						$Email->replyTo('info@indonesiancareerexpo.org', "Indonesian Career Expo");
						$Email->to($this->compEmails[$comp_name]["email"], $this->compEmails[$comp_name]["name"]);
						$Email->attachments($dest);
						$Email->subject('ICarE 2015 - CV Submission from ' . $fullName . " to " . $this->compEmails[$comp_name]["name"] . ".");
						$Email->send(h("A CV has been submitted to " . $this->compEmails[$comp_name]["name"] . "! Please find the CV attached below.\n\n Details:\n Name: " . $fullName . "\nEmail: " .  $attendee['UnconSubmission']['email']));
					}
				}

				// Send an email to notify confirmation
				$Email = new CakeEmail('admin');
				$Email->addHeaders(array('X-MC-Tags' => 'CV Submission Confirmed'));
				$Email->from('info@indonesiancareerexpo.org', "Indonesian Career Expo");
				$Email->replyTo('info@indonesiancareerexpo.org', "Indonesian Career Expo");
				$Email->to($attendee['UnconSubmission']['email'], $fullName);
				$Email->subject('ICarE 2015 CV Submission Confirmed');
				$Email->send(h("You have successfully submitted your CV to your companies of choice! \n\n Details:\n Name: " . $fullName . "\nEmail: " .  $attendee['UnconSubmission']['email']));

				$this->set('attendee', $attendee);
			} else {
				throw new Exception('Failed');
			}
		}
		
	}

	public function resumes($hash) {

		$attendee = $this->Submission->find('first', array('conditions' => array('Submission.hash' => $hash)));
		$resume = $attendee['Submission']['resume'];

		
        $this->viewClass = 'Media';
        $params = array(
            'id'        => $resume,
            'name'      => $attendee['Submission']['email'],
            'download'  => false,
            'extension' => pathinfo($resume, PATHINFO_EXTENSION),
            'path'      => 'webroot' . DS
        );
        $this->set($params);
	}

	public function thankyou() {}
}
?>