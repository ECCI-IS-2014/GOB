<?php
/**
 * Created by PhpStorm.
 * User: a33724
 * Date: 07/11/14
 * Time: 01:38 PM
 */
App::uses('AppController','Controller','File','Utility');
App::uses('User','Model');

class UsersController extends AppController {


    public $uses = array ('User');


    public function index() {
        pr($this->data);
        $this->loadModel('User');
        $result = $this->User->find('first', array(
            'conditions'=>array('User.pin'=>$this->data['User']['pin'],'User.numtarjeta'=>$this->data['User']['numTarjeta'])));


        if(!empty($result)){

            pr($result);
            $this->set('users', $result);

        }
        else{

            $this->flash('Tarjeta o pin inválidos','/users/insesion');
        }

    }

    public function add(){

        if ( $this->request->is('post') && !empty($this->data)  ) {

            pr($this->data);

            $this->User->create();

            if ($this->User->save($this->request->data)  ) {

                $this->flash('Usuario registrado','/');

            }else{

                $this->flash('No se pudo registrar el usuario','/');
            }
        }

    }//fin de add()

    public function edit($id = null) {
        $this->loadModel('User');

        $saldo = $this->User->findById($this->request->data['User']['id']);


           $this->User->id = $this->request->data['User']['id'];
            if ($this->User->saveField('saldo',$this->request->data['User']['saldo'])) {
                 $this->flash('Saldo actualizado','/');
            }else{

                debug($this->User->validationErrors);
                $this->flash('Saldo NO actualizado','/');

            }
        if (!$this->request->data) {
            $this->request->data = $saldo;
        }
    }

    public function anadir(){

    }


    public function insesion(){



    }
}