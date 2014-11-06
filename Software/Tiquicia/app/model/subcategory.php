<?php
App::uses('AppModel', 'Model');
class Subcategory extends AppModel {

	public $hasMany = array(
        'MySubcategory' => array(
            'className' => 'Subcategory',
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

}