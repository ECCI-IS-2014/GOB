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

	var $name = 'User';
    var $hasMany = array(
		'Wish' => array(
			'className' => 'Wish'
		),
		'Card' => array(
			'className' => 'Card'
		)
	);
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
                'message' => 'An identification is required'
            )
        ),

        'email' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'An email is required'
            )
        ),
        'country' => array(
            'rule' => array('inList', array('Costa Rica','USA')),
            'allowEmpty' => false
        ),
        'city' => array(
            'rule' => array('inList', array('SJ', 'AJ', 'HR', 'CG', 'GC', 'PU', 'LI', 'AL', 'AK', 'AZ', 'AR', 'CA', 'CO', 'CT',
                'DE', 'DC', 'FL', 'GA', 'HI', 'ID', 'IL', 'IN', 'IA', 'KS', 'KY', 'LA', 'ME', 'MD',
                'MA', 'MI', 'MN', 'MS', 'MO', 'MT', 'NE', 'NV', 'NH', 'NJ', 'NM', 'NY', 'NC', 'ND',
                'OH', 'OK', 'OR', 'PA', 'RI', 'SC', 'SD', 'TN', 'TX', 'UT', 'VT', 'VA', 'WA', 'WV',
                'WI', 'WY')),
            'allowEmpty' => false
        ),
        'fact_address' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'An Fact_address is required'
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

    public function getAllUsers() {
        return $this->find('all', array(
            'fields' => array('id','first_name','middle_name','last_name','email','identification','birth_date','username','role')
        ));
    }

    public function getSingleUser($id = null) {
        return $this->find('first', array(
            'conditions' => array('id' => $id)
        ));
    }

    public function addUser($userData) {
        return $this->save($userData);
    }

    public function editUser($userData) {
        return $this->save($userData);
    }

	public function deleteUser($userData) {
    return $this->delete($userData);
  }
}