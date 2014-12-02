<?php
/**
 * Created by PhpStorm.
 * User: a33724
 * Date: 07/11/14
 * Time: 11:49 AM
 */


App::uses('AppModel', 'Model');
App::uses('BlowfishPasswordHasher', 'Controller/Component/Auth');

class User extends AppModel {

    public $validate = array(
        'nombre' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'A name is required'
            )
        ),

        'apellido1' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'A middle name is required'
            )
        ),

        'apellido2' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'A last name is required'
            )
        ),

        'cedula' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'A NS is required'
            )
        ),

        'fecNacimiento' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'A date is required'
            )
        ),

        'telefono' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'An phone number is required'
            )
        ),

        'direccion' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'A address is required'
            )
        ),

        'contrasenia' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'A password is required'
            )
        ),
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

    /*
    public function beforeSave($options = array()) {

        if (isset($this->data[$this->alias]['contrasenia'])) {
            $passwordHasher = new BlowfishPasswordHasher();
            $this->data[$this->alias]['contrasenia'] = $passwordHasher->hash(
                $this->data[$this->alias]['contrasenia']
            );
        }

        if (isset($this->data[$this->alias]['pin'])) {
            $passwordHasher = new BlowfishPasswordHasher();
            $this->data[$this->alias]['pin'] = $passwordHasher->hash(
                $this->data[$this->alias]['pin']
            );
        }

        return true;
    }
*/
}