<?php
/**
 * Created by PhpStorm.
 * User: Daniel
 * Date: 3/09/14
 * Time: 9:59
 */
App::uses('AppModel', 'Model');
App::uses('BlowfishPasswordHasher', 'Controller/Component/Auth');

class User extends AppModel {
    public $validate = array(
        'username' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'A username is required'
            )
        ),
        'password' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'A password is required'
            )
        ),

        'first_name' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'A first name is required'
            )
        ),

        'middle_name' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'A middle name is required'
            )
        ),

        'last_name' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'A last name is required'
            )
        ),

        'identification' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'A social id is required'
            )
        ),

        'email' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'An email is required'
            )
        ),



        'birth_date' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'A birth date is required'
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