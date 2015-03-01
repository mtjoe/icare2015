<?php
App::uses('AppModel', 'Model');
class UnconPreEvent extends AppModel {
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
		),
		'resume' => array(
	        
	    ),
	    'hash' => array(
	        
	    )

	);
}

?>