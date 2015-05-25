<?php
App::uses('AppModel', 'Model');
/**
 * DataType Model
 *
 * @property Manualdatalog $Manualdatalog
 */
class DataType extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'data_type';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Manualdatalog' => array(
			'className' => 'Manualdatalog',
			'foreignKey' => 'data_type_id',
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
        
         public function getAllDataTypes(){
        return $this->find('all',array(
            'fields' => array('id','data_type','description','temporality')));
    }

    //Probando:Obtener todo de la base de datos según Id.
    public function getDataTypesFiltrados($id = null) {
        return $this->find('first', array(
            'conditions' => array('DataType.id' => $id),
            'fields' => array('id','data_type','description','temporality')
        ));
    }

}
