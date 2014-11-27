<?php
App::uses('AppModel', 'Model');
class Address extends AppModel {	
    var $name = 'Address';
    var $validate = array(
		'country' => array(
            'rule' => array('inList', array('Costa Rica','USA')),
            'allowEmpty' => false
        ),
        'city' => array(
            'rule' => array('inList', array('SJ', 'AJ', 'HR', 'CG', 'GC', 'PU', 'LI', 'AL', 'AK', 'AZ', 'AR', 'CA', 'CO', 'CT',
                                            'DE', 'DC', 'FL', 'GA', 'HI', 'ID', 'IL', 'IN', 'IA', 'KS', 'KY', 'LA', 'ME', 'MD',
                                            'MA', 'MI', 'MN', 'MS', 'MO', 'MT', 'NE', 'NV', 'NH', 'NJ', 'NM', 'NY', 'NC', 'ND',
                                            'OH', 'OK', 'OR', 'PA', 'RI', 'SC', 'SD', 'TN', 'TX', 'UT', 'VT', 'VA', 'WA', 'WV',
                                            'WI', 'WY')),
            'allowEmpty' => false
        ),
	    'address' => array(
            'valid' => array(
                'rule' => array('notEmpty'),
                'message' => 'Ingrese una direcci�n v�lida',
                'allowEmpty' => false
            )
        )
	);
}