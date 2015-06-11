<?php
class Manualdatalog extends AppModel {
	var $name = 'Manualdatalog';
	var $validate = array(
		/*'temp' => array(
			//'between' => array(
				'rule' => array('between',15,35),
				'message' => 'Invalid temp',
				'allowEmpty' => false,
				//'required' => true,
				/*'last' => false, // Stop validation after this rule
				'on' => 'create', // Limit validation to 'create' or 'update' operations*/
			//),
		/*),
		'relative_humidity' => array(
			//'range' => array(
				//'rule' => array('range'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			//),
		),*/
	);
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Station' => array(
			'className' => 'Station',
			'foreignKey' => 'station_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
