<?php
class AddressesController extends AppController {

	public function beforeFilter(){
		parent::beforeFilter();
		$this->Auth->allow('add_address','index','update_address','delete_address');
	}


    public function add_address(){
		if ($this->request->is('post')) {
			$this->loadModel('Address');
			$this->Address->create();
			if(isset($this->request->data['submit1'])){
				if ($this->Address->save($this->request->data)) {
					$this->Address->savefield ('user_id',$this->Session->read('Auth.User.id'));
					$this->flash('Dirección añadida','/Addresses');
				}
				else{
					$this->flash('Dirección NO añadida','/');
				}
			}
		}

    }//agregar_address()

	
	public function index() {
		$this->loadModel('Address');

        $c = $this->Address->find('all', array('conditions'=>array('Address.user_id'=> $this->Auth->user('id'))));
        $this->set('addresses',$c);
    }
	
    function delete_address($adresses){
	    if (!empty($adresses)) {
            $result = $this->Address->find('first', array(
				'conditions'=>array('Address.id'=>$adresses)));
            if( sizeof($result) >= 1 ){
                $this->set('addresses', $result);
            }
        }//fin de if
		if (!empty($this->data)) {
            $pd = $this->Address->read(null,$this->data['Address']['id']);
            $this->set('address',$pd);
            $this->Address->delete($this->request->data('address.id'));
            $this->flash('Dirección eliminada con exito','/addresses/index');
        }
    }//fin de delete
	
	function update_address($addresses){

        $this->loadModel('Address');
        $this->Address->create();

	    if (!empty($addresses)) {
            $result = $this->Address->find('first', array(
				'conditions'=>array('Address.id'=>$addresses)));
            if( sizeof($result) >= 1 ){
                $this->set('addresses', $result);
            }
        }//fin de if
		if($this->request->is('post') || $this->request->is('put')) {
			$this->Address->create();
			$this->Address->id = $this->data['Address']['id'];
            $this->Address->savefield ('country',$this->data['Address']['country']);
            $this->Address->savefield ('city',$this->data['Address']['city']);
            $this->Address->savefield ('address',$this->data['Address']['address']);

            $ret = $this->data;
            $result = $this->Address->find('first', array(
                'conditions'=>array('Address.id'=>$this->data['Address']['id'])));

            if ( $ret ) {
                $this->flash('Direccion actualizada con exito','/addresses/index');
            }
            else{
                $this->flash('Direccion NO actualizada','/addresses/index');
            }
        }
	}

}