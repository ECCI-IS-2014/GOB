<?php
App::uses('AppModel', 'Model');
/**
 * Valuesdatatype Model
 *
 * @property Automaticdatalog $Automaticdatalog
 * @property data_type $data_type
 */
class Valuesdatatype extends AppModel {

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'Id';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'Id';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Automaticdatalog' => array(
			'className' => 'Automaticdatalog',
			'foreignKey' => 'Automaticdatalog_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'data_type' => array(
			'className' => 'data_type',
			'foreignKey' => 'Data_type_Id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
