<?php
class Valuesdatatype extends AppModel {
	var $name = 'Valuesdatatype';
	var $displayField = 'data_type_id';
	var $validate = array(
		'data_type_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'automaticdatalog_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'data_value' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'DataType' => array(
			'className' => 'DataType',
			'foreignKey' => 'data_type_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Automaticdatalog' => array(
			'className' => 'Automaticdatalog',
			'foreignKey' => 'automaticdatalog_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
