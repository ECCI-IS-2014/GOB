<?php
App::uses('AppModel', 'Model');


class Category extends AppModel {

	public $hasMany = array(
        'MyCategory' => array(
            'className' => 'Category',
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

}