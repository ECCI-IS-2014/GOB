<?php
App::uses('AppModel', 'Model');
class Card extends AppModel {

	
    var $name = 'Card';
    var $validate = array(
		'number' => array(
            'rule' => array('cc', array('visa', 'maestro','amex'), false, null),
            'allowEmpty' => false,
            'message' => 'Digite un numero de tarjeta valido'
        ),
	    'type' => array(
            'valid' => array(
                'rule' => array('inList', array('Visa', 'MasterCard','AmericanExpress')),
                'message' => 'Please enter a valid type',
                'allowEmpty' => false
            )
        ),
        'expire_year' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'A expire year is required'
            )
        ),
		'expire_month' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'A expire month is required'
            )
        ),
		'sec_code' => array(
            'rule' => '/^[0-9]{3}$/i',
            'allowEmpty' => false,
            'message' => 'Digite codigo de seguridad valido'
        )
    );

}