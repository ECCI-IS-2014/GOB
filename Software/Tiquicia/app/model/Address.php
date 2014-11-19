<?php
App::uses('AppModel', 'Model');
class Address extends AppModel {	
    var $name = 'Address';
    var $validate = array(
		'country' => array(
            'rule' => array('inList', array('Costa Rica','USA')),
            'allowEmpty' => false
        ),
	    'address' => array(
            'valid' => array(
                'rule' => array('notEmpty'),
                'message' => 'Ingrese una dirección válida',
                'allowEmpty' => false
            )
        )
	);
}