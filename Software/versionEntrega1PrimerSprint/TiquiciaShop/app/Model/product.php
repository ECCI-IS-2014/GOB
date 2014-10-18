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
            'rule' => array('maxLength', '20000'),
            'required' => true,
            'allowEmpty' => true,
            'message' => 'Máximo alcanzado'
        ),
        'price' => array(
            'rule' => 'alphaNumeric',
            'allowEmpty' => false,
            'message' => 'Precio incorrecto'
        ),
        'weight' => array(
            'rule' => array('maxLength', '20000'),
            'allowEmpty' => false,
            'message' => 'Digite un peso correcto'
        ),
        'volumen' => array(
            'rule' => array('maxLength', '20000'),
            'allowEmpty' => false,
            'message' => 'Digite un volumen correcto'
        ),
        'keywords' => array(
            'rule' => array('maxLength', '40'),
            'required' => true,
            'allowEmpty' => true,
            'message' => 'Necesario'
        )
    );
    var $actsAs = array(
        'MeioUpload' => array('filename'),
        'Search.Searchable'
    );

    public $filterArgs = array(
        'keywords' => array(
            'type' => 'like',
            'field' => 'keywords'
        ),
        'name' => array(
            'type' => 'like',
            'field' => 'name'
        ),
        'type' => array(
            'type' => 'like',
            'field' => 'type'
        ),
        'active' => array(
            'type' => 'value'
        )
    );


    //Funciones para pruebas unitarias
    public function getAllProducts() {
        return $this->find('all', array(
            'fields' => array('id', 'name',
             'category','type','price',
              'weight','filename','dir',
            'created','keywords','volumen')
        ));
    }
}