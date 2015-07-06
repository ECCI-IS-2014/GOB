<?php
App::uses('AppModel', 'Model');
/**
 * DataType Model
 *
 * @property Sensor $Sensor
 * @property valuesdatatypes $valuesdatatypes
 */
class DataType extends AppModel {

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
	public $displayField = 'Name';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Sensor' => array(
			'className' => 'Sensor',
			'foreignKey' => 'Sensor_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);





    public function getAllDataTypes(){
        return $this->find('all');
    }

    //Probando:Obtener todo de la base de datos según Id.
    public function getDataTypesFiltrados($id = null) {
        return $this->find('first', array(
            'conditions' => array('DataType.id' => $id)
        ));
    }

}
