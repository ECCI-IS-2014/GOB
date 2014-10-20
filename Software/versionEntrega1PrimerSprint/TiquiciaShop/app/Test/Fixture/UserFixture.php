<?php
class UserFixture extends CakeTestFixture {

      // Optional.
      // Set this property to load fixtures to a different test datasource
      public $useDbConfig = 'test';
      public $fields = array(
          'id' => array('type' => 'integer', 'key' => 'primary'),
          'first_name' => array('type' => 'string', 'length' => 40, 'null' => false),
          'middle_name' => array('type' => 'string', 'length' => 40, 'null' => false),
		  'last_name' => array('type' => 'string', 'length' => 40, 'null' => false),
          'email' => array('type' => 'string', 'length' => 40, 'null' => false),
          //'password' => array('type' => 'string', 'length' => 255, 'null' => true),   //para que no se caiga con el hash 
          'identification' => array('type' => 'string', 'length' => 20, 'null' => false),
          'birth_date' => 'date',
		  'username' => array('type' => 'string', 'length' => 40, 'null' => false),
          'role' => array('type' => 'string', 'length' => 12, 'null' => false),
          
      );
      public $records = array(
          array(
            'id' => '1',
            'first_name' => 'Daniel',
            'middle_name' => 'Mora',
            'last_name' => 'Madrigal',
            'email' => 'dan182mora@gmail.com',
            //'password' => '123456',
			'identification' => '123456789',
			'birth_date' => '1992-12-22',
			'username' => 'danielm123',
			'role' => 'admin'
          ),
          array(
            'id' => '2',
            'first_name' => 'Alejandro',
            'middle_name' => 'Cordoba',
            'last_name' => 'Soto',
            'email' => 'coba@gmail.com',
            //'password' => '125856',
			'identification' => '123756789',
			'birth_date' => '1992-10-26',
			'username' => 'coba2',
			'role' => 'admin'
          ),
          array(
            'id' => '3',
            'first_name' => 'Jose',
            'middle_name' => 'Mora',
            'last_name' => 'Madrigal',
            'email' => 'Jmora@gmail.com',
            //'password' => '903456',
			'identification' => '190456789',
			'birth_date' => '2003-11-14',
			'username' => 'Jm123',
			'role' => 'admin'
          )
      );
 }