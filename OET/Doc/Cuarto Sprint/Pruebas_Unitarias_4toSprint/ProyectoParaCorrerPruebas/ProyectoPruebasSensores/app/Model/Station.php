<?php
App::uses('AppModel', 'Model');
/**
 * Station Model
 *
 * @property Manualdatalog $Manualdatalog
 * @property Sensor $Sensor
 */
class Station extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'description';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Manualdatalog' => array(
			'className' => 'Manualdatalog',
			'foreignKey' => 'station_id',
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
		'Sensor' => array(
			'className' => 'Sensor',
			'foreignKey' => 'station_id',
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
        'Automaticdatalog' => array(
            'className' => 'Automaticdatalog',
            'foreignKey' => 'station_id',
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

    var $hasOne = array(
        'Configuration' => array(
            'className'    => 'Configuration',
            'foreignKey' => 'station_id',
            'dependent'    => true
        )
    );
        
            //Probando:Obtener todo de la base de datos.
    public function getAllStations(){
        return $this->find('all',array(
            'fields' => array('id','station','description')));
    }

    //Probando:Obtener todo de la base de datos según Id.
    public function getStationsFiltrados($id = null) {
        return $this->find('first', array(
            'conditions' => array('Station.id' => $id),
            'fields' => array('id','station','description')
        ));
    }

}
