<?php
App::uses('User', 'Model');

class UserTest extends CakeTestCase {
    public $fixtures = array('app.user');
	public function setUp() {
        parent::setUp();
        $this->User = ClassRegistry::init('User');
    }

    public function testGetAllUsers() {
        $result = $this->User->getAllUsers();
        $expected = array(
            array('User' => array('id' => '1',
            'first_name' => 'Daniel',
            'middle_name' => 'Mora',
            'last_name' => 'Madrigal',
            'email' => 'dan182mora@gmail.com',
            //'password' => '123456',
			'identification' => '123456789',
			'birth_date' => '1992-12-22',
			'username' => 'danielm123',
			'role' => 'admin')),
            
			array('User' => array('id' => '2',
            'first_name' => 'Alejandro',
            'middle_name' => 'Cordoba',
            'last_name' => 'Soto',
            'email' => 'coba@gmail.com',
           // 'password' => '125856',
			'identification' => '123756789',
			'birth_date' => '1992-10-26',
			'username' => 'coba2',
			'role' => 'admin')),
            
			array('User' => array('id' => '3',
            'first_name' => 'Jose',
            'middle_name' => 'Mora',
            'last_name' => 'Madrigal',
            'email' => 'Jmora@gmail.com',
           // 'password' => '903456',
			'identification' => '190456789',
			'birth_date' => '2003-11-14',
			'username' => 'Jm123',
			'role' => 'admin'))
        );

        $this->assertEquals($expected, $result);
    }
	
	
	public function testGetSingleUser() {
        $result = $this->User->getSingleUser(2);                
        $expected = array(
            'User' => array(
			'id' => '2',
            'first_name' => 'Alejandro',
            'middle_name' => 'Cordoba',
            'last_name' => 'Soto',
            'email' => 'coba@gmail.com',
           // 'password' => '125856',
			'identification' => '123756789',
			'birth_date' => '1992-10-26',
			'username' => 'coba2',
			'role' => 'admin'
            )
        );
        $this->assertEquals($expected, $result);
	}
	
	
	
	public function testAddUser() {
      $userData = array(
            'first_name' => 'Nuevo',
            'middle_name' => 'Usuario',
            'last_name' => 'Prueba',
            'email' => 'NUP@gmail.com',
           // 'password' => '125856',              comentado porque sino se cae debido al hash de las password
			'identification' => '123756789',
			'birth_date' => '1999-12-26',
			'username' => 'nup2',
			'role' => 'admin'
      );
      
      $numRecordsBefore = $this->User->find('count');
      $result = $this->User->addUser($userData);
      $numRecordsAfter = $this->User->find('count');
      
      $expected = array(
            'User' => array(
                'id' => '4', 
                'first_name' => 'Nuevo',
            'middle_name' => 'Usuario',
            'last_name' => 'Prueba',
            'email' => 'NUP@gmail.com',
            //'password' => '125856',          comentado porque sino se cae debido al hash de las password
			'identification' => '123756789',
			'birth_date' => '1999-12-26',
			'username' => 'nup2',
			'role' => 'admin'
            )
        );
      
      $this->assertEquals(4, $numRecordsAfter);
      $this->assertTrue($numRecordsBefore != $numRecordsAfter);
      $this->assertEquals($expected, $result);
    }
	
	
	
	public function testEditUser() {
      $this->User->id = '3';
      $userData = array(
          'first_name' => 'Nuevo',
            'middle_name' => 'Usuario',
            'last_name' => 'Editado',
            'email' => 'NUE@gmail.com',
            //'password' => '125856',
			'identification' => '123756789',
			'birth_date' => '1999-12-26',
			'username' => 'nup2',
			'role' => 'costumer'
      );
      $recordBeforeEdit = $this->User->read();
      $numRecordsBefore = $this->User->find('count');
      $result = $this->User->editUser($userData);
      $numRecordsAfter = $this->User->find('count');
      
      $expected = array(
            'User' => array(
                'id' => '3',
                'first_name' => 'Nuevo',
				'middle_name' => 'Usuario',
				'last_name' => 'Editado',
				'email' => 'NUE@gmail.com',
				//'password' => '125856',
				'identification' => '123756789',
				'birth_date' => '1999-12-26',
				'username' => 'nup2',
				'role' => 'costumer'
            )
        );
      
      $this->assertEquals($expected, $result);
      $this->assertTrue($numRecordsBefore == $numRecordsAfter);
            
      $recordCompare = array_diff($recordBeforeEdit['User'], $result['User']);
      $expectedArrayDiffResult = array(
			
			'first_name' => 'Jose',
            'middle_name' => 'Mora',
            'last_name' => 'Madrigal',
            'email' => 'Jmora@gmail.com',
            //'password' => '903456',
			'identification' => '190456789',
			'birth_date' => '2003-11-14',
			'username' => 'Jm123',
			'role' => 'admin'
      );
      
      $this->assertEquals($expectedArrayDiffResult, $recordCompare);
    }
	
	
	
	
}