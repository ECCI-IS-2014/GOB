<?php
App::uses('AppModel', 'Model');
class Subsubcategory extends AppModel {

	public $hasMany = array(
        'MySubsubcategory' => array(
            'className' => 'Subsubcategory',
        )
    );
    var $name = 'Subsubcategory';
    var $validate = array(
        'name' => array(
            'rule' => array('maxLength', '40'),
            'allowEmpty' => false,
            'message' => 'Nombre no válido'
        )
    );

    //Pruebas Unitarias

    public function addSubsubcategory($subsubcategoryData) {
        return $this->save($subsubcategoryData);
    }


    public function deleteSubsubcategory($subsubcategoryData) {
        return $this->delete($subsubcategoryData);
    }
}