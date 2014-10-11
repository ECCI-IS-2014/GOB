<?php
/**
 * Created by PhpStorm.
 * User: Dayner Umaña
 * Date: 09/10/14
 * Time: 09:48 AM
 */

class Product extends AppModel {
    var $name = 'Product';

    var $validate = array(
        'name' => array(
            'rule' => array('maxLength', '40'),
            'allowEmpty' => false,
            'message' => 'Nombre no válido'
        ),
        'keywords' => array(
            'rule' => array('maxLength', '40'),
            'allowEmpty' => false,
            'message' => 'Palabras clave no válidas'
        ),
        'type' => array(
            'rule' => array('maxLength', '40'),
            'allowEmpty' => false,
            'message' => 'Tipo no válido'
        ),
        'price' => array(
            'rule' => 'alphaNumeric',
            'allowEmpty' => false,
            'message' => 'Precio incorrecto'
        ),
        'weight' => array(
            'rule' => 'alphaNumeric',
            'allowEmpty' => false,
            'message' => 'Digite un peso correcto'
        )
    );
}