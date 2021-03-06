<?php
/**
 * Created by PhpStorm.
 * User: Alejandro Cordoba
 * Date: 29/10/14
 * Time: 05:01 AM
 */
class Bill extends AppModel {

    public $hasMany = 'Sell';

    var $name = 'Bill';
	    var $validate = array(
		'product_id' => array(
            'rule' => int,
            'allowEmpty' => false,
            'message' => 'id producto invalido'
        ),
        'card_id' => array(
            'rule' =>array('int'),
            'allowEmpty' => false,
            'message' => 'Digite la cantidad en stock correcta'
         ),
	    'product_name' => array(
            'rule' => array('maxLength', '20000'),
            'message' => 'Please enter a valid type',
            'allowEmpty' => false
        )
    );

}