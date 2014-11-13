<?php
/**
 * Created by PhpStorm.
 * User: Alejandro Cordoba
 * Date: 29/10/14
 * Time: 05:01 AM
 */
class Sell extends AppModel {

    public $belongsTo = 'Bill';
    var $name = 'Sell';
	    var $validate = array(
		'product_id' => array(
            'rule' => int,
            'allowEmpty' => false,
            'message' => 'id producto invalido'
        ),
	    'product_name' => array(
            'rule' => array('maxLength', '20000'),
            'message' => 'Please enter a valid type',
            'allowEmpty' => false
        )
    );

}