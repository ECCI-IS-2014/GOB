<?php
App::uses('AppModel', 'Model');
/**
 * Configuration Model
 *
 * @property Station $Station
 * @property Config $Config
 */
class Configuration extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'station_id';


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
		'Config' => array(
			'className' => 'Config',
			'foreignKey' => 'configuration_id',
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


    public function getAllConfiguration(){
        return $this->find('all');
    }

    //Probando:Obtener todo de la base de datos según Id.
    public function getConfigurationFiltrados($id = null) {
        return $this->find('first', array(
            'conditions' => array('Configuration.id' => $id)
        ));
    }

}
