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
        'category' => array(
            'valid' => array(
                'rule' => array('inList', array('Tennis_de_mesa', 'Volleyball','Baseball','Ciclismo','Futbol','Baloncesto','Otros')),
                'message' => 'Please enter a valid category',
                'allowEmpty' => false
            )
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
        ),
        'keywords' => array(
            'rule' => array('maxLength', '40'),
            'required' => true,
            'allowEmpty' => false,
            'message' => 'Necesario'
        )
    );
    var $actsAs = array(
        'MeioUpload' => array('filename')
    );
}