<?php
App::uses('AppModel', 'Model');
class Subcategory extends AppModel {

	public $hasMany = array(
        'MyProduct' => array(
            'className' => 'Product',
        )
    );
    var $name = 'Subcategory';
    var $validate = array(
        'name' => array(
            'rule' => array('maxLength', '40'),
            'allowEmpty' => false,
            'message' => 'Nombre no válido'
        ) 
    );

    //Pruebas Unitarias

    public function addSubcategory($subcategoryData) {
        return $this->save($subcategoryData);
    }


    public function deleteSubcategory($subcategoryData) {
        return $this->delete($subcategoryData);
    }
}