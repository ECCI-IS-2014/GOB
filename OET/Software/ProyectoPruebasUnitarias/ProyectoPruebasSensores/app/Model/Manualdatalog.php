<?php
App::uses('AppModel', 'Model');
/**
 * Manualdatalog Model
 *
 * @property DataType $DataType
 * @property Sensor $Sensor
 * @property Station $Station
 */
class Manualdatalog extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'data_';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'recolection_date' => array(
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
		'DataType' => array(
			'className' => 'DataType',
			'foreignKey' => 'data_type_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Sensor' => array(
			'className' => 'Sensor',
			'foreignKey' => 'sensor_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Station' => array(
			'className' => 'Station',
			'foreignKey' => 'station_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
        
            //Probando:Obtener todo de la base de datos.
    public function getAllManualdatalogs(){
        return $this->find('all',array(
            'fields' => array('id','data_type_id','data_','sensor_id','station_id')));
    }

    //Probando:Obtener todo de la base de datos según Id.
    public function getManualdatalogsFiltrados($id = null) {
        return $this->find('first', array(
            'conditions' => array('Manualdatalog.id' => $id),
            'fields' => array('id','data_type_id','data_','sensor_id','station_id')
        ));
    }
}
