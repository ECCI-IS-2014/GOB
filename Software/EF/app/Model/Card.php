<?php
/**
 * Created by PhpStorm.
 * User: a33724
 * Date: 07/11/14
 * Time: 11:49 AM
 */


App::uses('AppModel', 'Model');
App::uses('BlowfishPasswordHasher', 'Controller/Component/Auth');

class Card extends AppModel {

    

    public $validate = array(

        'numTarjeta' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'Numero de Tarjeta Requerida'
            )
        ),

        'pin' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'Pin de la trajeta es necesario'
            )
        ),

        'tipoMoneda' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'Defina el tipo de Moneda que utiliza'
            )
        ),

        'fechaVencimiento' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'Día de vencimiento necesario'
            )
        )
    );

    public function beforeSave($options = array()) {
        if (isset($this->data[$this->alias]['password'])) {
            $passwordHasher = new BlowfishPasswordHasher();
            $this->data[$this->alias]['password'] = $passwordHasher->hash(
                $this->data[$this->alias]['password']
            );
        }
        return true;
    }

}