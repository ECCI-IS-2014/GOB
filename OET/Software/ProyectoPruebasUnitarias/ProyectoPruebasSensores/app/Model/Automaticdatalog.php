<?php
App::uses('AppModel', 'Model');
/**
 * Automaticdatalog Model
 *
 * @property Station $Station
 */
class Automaticdatalog extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'id';


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




    public function getAllAutomaticdatalogs(){
        return $this->find('all');
    }

    //Probando:Obtener todo de la base de datos según Id.
    public function getAutomaticdatalogsFiltrados($id = null) {
        return $this->find('first', array(
            'conditions' => array('Automaticdatalog.id' => $id)
        ));
    }
}
