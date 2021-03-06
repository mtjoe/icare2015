<?php
App::uses('AppModel', 'Model');
class PreEvent extends AppModel {
	/*public $validate = array(
		'first_name' => array(
			'required' => array(
                'rule' => array('minLength', 1),
                'allowEmpty' => false,
                'message' => 'Please enter your first name.'
            )
		),
		'last_name' => array(
			'required' => array(
                'rule' => array('minLength', 1),
                'allowEmpty' => false,
                'message' => 'Please enter your last name.'
            )
		),
		'email' => array(
			'email' => array(
				'rule' => 'email',
				'allowEmpty' => 'false'
			)
		),
		'university' => array(
			'alphanumeric' => array(
				'rule' => 'Please enter a valid university.',
				'allowEmpty' => 'false'
			)
		),
		'resume' => array(
			'extension' => array(
	            'rule' => array('extension', array('pdf')),
	             'message' => 'Only pdf files',
	         )
	    )
	);*/

	public $validate = array(
		'first_name' => array(
			'required' => array(
                'rule' => array('minLength', 1),
                'allowEmpty' => false,
                'message' => 'Please enter your first name.'
            )
		),
		'last_name' => array(
			'required' => array(
                'rule' => array('minLength', 1),
                'allowEmpty' => false,
                'message' => 'Please enter your last name.'
            )
		),
		'email' => array(
			'email' => array(
				'rule' => 'email',
				'allowEmpty' => 'false'
			)
		),
		'university' => array(
			'alphanumeric' => array(
				'rule' => 'alphanumeric',
				'allowEmpty' => 'false'
			)
		)

	);
}

?>