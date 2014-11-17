<?php

class RestUsersController extends AppController {
	public $uses = array('User');
    public $helpers = array('Html', 'Form');
	public $components = array('RequestHandler');


	public function index() {
		$users = $this->User->find('all');
        $this->set(array(
            'users' => $users,
            '_serialize' => array('users')
        ));
    }

	public function add() {
		$this->User->create();
		if ($this->User->save($this->request->data)) {
			 $message = 'Creado';
		} else {
			$message = 'Error';
		}
		$this->set(array(
			'message' => $message,
			'_serialize' => array('message')
		));
    }
	
	public function view($id) {
        $user = $this->User->findByNumtarjeta($id);
        $this->set(array(
            'user' => $user['User']['saldo'],
            '_serialize' => array('user')
        ));
    }

	
	public function edit($id) {
        $this->User->id = $id;
        if ($this->User->save($this->request->data)) {
            $message = 'Guardado';
        } else {
            $message = 'Error';
        }
        $this->set(array(
            'message' => $message,
            '_serialize' => array('message')
        ));
    }
	
	public function delete($id) {
        if ($this->User->delete($id)) {
            $message = 'Borrado';
        } else {
            $message = 'Error';
        }
        $this->set(array(
            'message' => $message,
            '_serialize' => array('message')
        ));
    }
}