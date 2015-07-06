<?php
App::uses('AppModel', 'Model');
/**
 * Config Model
 *
 * @property DataType $DataType
 * @property Configuration $Configuration
 */
class Config extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'id';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
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
		'csv_columns' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'habilitado' => array(
			'boolean' => array(
				'rule' => array('boolean'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'configuration_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'DataType' => array(
			'className' => 'DataType',
			'foreignKey' => 'data_type_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Configuration' => array(
			'className' => 'Configuration',
			'foreignKey' => 'configuration_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);


    public function getAllConfig(){
        return $this->find('all');
    }

    //Probando:Obtener todo de la base de datos según Id.
    public function getConfigFiltrados($id = null) {
        return $this->find('first', array(
            'conditions' => array('Config.id' => $id)
        ));
    }
}
