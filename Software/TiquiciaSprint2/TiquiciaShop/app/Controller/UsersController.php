<?php
class UsersController extends AppController {
    public function beforeFilter() {
        parent::beforeFilter();
		$this->Auth->allow('add','logout','login','view','home');
    }

    public function index() {

        $this->User->recursive = 0;
        $this->set('users', $this->User->find('all'));
    }

   

    public function add() {
        if ($this->request->is('post')) {
            $this->User->create();
            if ($this->User->save($this->request->data)) {
                $this->Session->setFlash(__('The user has been saved'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash(
                __('The user could not be saved. Please, try again.')
            );
        }
    }

    public function edit($id = null) {
        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->User->save($this->request->data)) {
                $this->Session->setFlash(__('The user has been saved'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash(
                __('The user could not be saved. Please, try again.')
            );
        } else {
            $this->request->data = $this->User->read(null, $id);
            unset($this->request->data['User']['password']);
        }
    }

    function delete(){


        if (!empty($this->data)) {

            $pd = $this->User->read(null,$this->data['User']['id']);

            $this->set('user',$pd);

            $this->User->delete($this->request->data('user.id'));

            $this->flash('Usuario eliminado con exito','/users/index');

        }

    }//fin de delete

    function search_delete($users){

        if (!empty($users)) {

            $result = $this->User->find('first', array(
                'conditions'=>array('User.id'=>$users)));


            if(sizeof($result) >= 1){

                $this->set('users', $result);

            }
            else{

                $this->flash('id usuario incorrecto','/users/index');
            }

        }

    }

    function update(){


        if($this->request->is('post') || $this->request->is('put')) {

            $this->User->create();

            $result1 = $this->User->find('first', array(
                'conditions'=>array('User.id'=>$this->data['User']['id'])));

            $result1['User']['id'] = $this->data['User']['id'];
            $result1['User']['first_name'] = $this->data['User']['first_name'];
            $result1['User']['middle_name'] = $this->data['User']['middle_name'];
            $result1['User']['email'] = $this->data['User']['email'];
            $result1['User']['password'] = $this->data['User']['password'];
            $result1['User']['identification'] = $this->data['User']['identification'];
            $result1['User']['birth_date'] = $this->data['User']['birth_date'];
            $result1['User']['username'] = $this->data['User']['username'];


            $this->User->save($result1);


            //$ret1 = $this->User->save($this->data);
            $ret = $this->data;
            $result = $this->User->find('first', array(
                'conditions'=>array('User.id'=>$this->data['User']['id'])));

            //pr($result['User']['dir']);


            //pr($ret);

            if ( $ret ) {


                $this->flash('Usuario actualizado con exito','/users/index');
            }
            else{

                $this->flash('Usuario NO actualizado','/users/index');

            }
        }

    }//fin de update

    function search_update($users){



        if (!empty($users)) {

            $result = $this->User->find('first', array(
                'conditions'=>array('User.id'=>$users)));




            if( sizeof($result) >= 1 ){

                $this->set('users', $result);

                //pr($result);

            }

        }//fin de if

    }//fin de searchUpdate

    public function login() {
        if ($this->request->is('post')) {
            if ($this->Auth->login()) {
                return $this->redirect($this->Auth->redirect());
            }
            $this->Session->setFlash(__('Invalid username or password, try again'));
        }
    }

    public function logout() {

                return $this->redirect($this->Auth->logout());
            }

}