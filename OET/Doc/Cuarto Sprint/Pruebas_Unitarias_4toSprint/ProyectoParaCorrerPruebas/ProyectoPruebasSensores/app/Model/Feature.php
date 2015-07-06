<?php
App::uses('AppModel', 'Model');
/**
 * Feature Model
 *
 * @property Sensor $Sensor
 */
class Feature extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Sensor' => array(
			'className' => 'Sensor',
			'foreignKey' => 'sensor_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
        
            //Probando:Obtener todo de la base de datos.
    public function getAllFeatures(){
        return $this->find('all',array(
            'fields' => array('id','name','sensor_id')));
    }

    //Probando:Obtener todo de la base de datos según Id.
    public function getFeaturesFiltrados($id = null) {
        return $this->find('first', array(
            'conditions' => array('Feature.id' => $id),
            'fields' => array('id','name','sensor_id')
        ));
    }
}
