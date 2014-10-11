<?php
/**
 * Created by PhpStorm.
 * User: Esteban Noguera
 * Date: 09/10/14
 * Time: 09:48 AM
 */

class Product extends AppModel {

    //var $name = 'Product';


    var $validate = array(

        'name' => array(
            'rule' => array('maxLength', '40'),
            'allowEmpty' => false,
            'message' => 'Nombre no válido'
        ),
        'type' => array(
            'rule' => array('maxLength', '40'),
            'required' => false,
            'message' => 'Tipo no válido'
        ),
        'price' => array(
            'rule' => 'alphaNumeric',
            'required' => false,
            'message' => 'Precio incorrecto'
        ),
        'weight' => array(
            'rule' => 'alphaNumeric',
            'required' => false,
            'message' => 'Precio incorrecto'
        )
    );
}