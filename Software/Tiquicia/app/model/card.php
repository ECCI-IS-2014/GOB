<?php
App::uses('AppModel', 'Model');
class Card extends AppModel {

	public $hasMany = array(
        'MyCategory' => array(
            'className' => 'Category',
        )
    );
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
        'expire_date' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'A expire date is required'
            )
        ),
		'sec_code' => array(
            'rule' => '/^[0-9]{3}$/i',
            'allowEmpty' => false,
            'message' => 'Digite codigo de seguridad valido'
        )
    );

}