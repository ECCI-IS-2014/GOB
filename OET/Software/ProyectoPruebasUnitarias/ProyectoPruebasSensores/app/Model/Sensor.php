<?php
App::uses('AppModel', 'Model');
/**
 * Sensor Model
 *
 * @property Station $Station
 * @property Feature $Feature
 * @property Manualdatalog $Manualdatalog
 */
class Sensor extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'serial';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'serial' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'installation_date' => array(
			'date' => array(
				'rule' => array('date'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'removal_date' => array(
			'date' => array(
				'rule' => array('date'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'calibration_date' => array(
			'date' => array(
				'rule' => array('date'),
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
		'Station' => array(
			'className' => 'Station',
			'foreignKey' => 'station_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Feature' => array(
			'className' => 'Feature',
			'foreignKey' => 'sensor_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Manualdatalog' => array(
			'className' => 'Manualdatalog',
			'foreignKey' => 'sensor_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);
        
        
        //Probando:Obtener todo de la base de datos.
    public function getAllSensors(){
        return $this->find('all',array(
            'fields' => array('id','serial','type_','model_','station_id')));
    }

    //Probando:Obtener todo de la base de datos según Id.
    public function getSensorsFiltrados($id = null) {
        return $this->find('first', array(
            'conditions' => array('Sensor.id' => $id),
            'fields' => array('id','serial','type_','model_','station_id')
        ));
    }

}
