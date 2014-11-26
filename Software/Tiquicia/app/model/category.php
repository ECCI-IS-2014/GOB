<?php
App::uses('AppModel', 'Model');
class Category extends AppModel {

	public $hasMany = array(
        'MyProduct' => array(
            'className' => 'Product',
        )
    );
    var $name = 'Category';
    var $validate = array(
        'name' => array(
            'rule' => array('maxLength', '40'),
            'allowEmpty' => false,
            'message' => 'Nombre no válido'
        ) 
    );
	var $actsAs = array(
        'MeioUpload' => array('filename'),
        'Search.Searchable'
    );


//Pruebas Unitarias

    public function addCategory($categoryData) {
        return $this->save($categoryData);
    }


    public function deleteCategory($categoryData) {
        return $this->delete($categoryData);
    }

}