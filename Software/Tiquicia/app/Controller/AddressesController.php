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
	
	function update_address($cards){

        $this->loadModel('Card');
        $this->Card->create();

	    if (!empty($cards)) {
            $result = $this->Card->find('first', array(
				'conditions'=>array('Card.id'=>$cards)));
            if( sizeof($result) >= 1 ){
                $this->set('cards', $result);
            }
        }//fin de if
		if($this->request->is('post') || $this->request->is('put')) {

            $this->Card->create();

            $result1 = $this->Card->find('first', array(
                'conditions'=>array('Card.id'=>$this->data['Card']['id'])));

            $result1['Card']['id'] = $this->data['Card']['id'];
			$result1['Card']['number'] = $this->data['Card']['number'];
            //$result1['Card']['user_id'] = $this->data['Card']['user_id'];
            $result1['Card']['sec_code'] = $this->data['Card']['sec_code'];
            $result1['Card']['expire_date'] = $this->data['Card']['expire_date'];
            $result1['Card']['type'] = $this->data['Card']['type'];
            $this->Card->save($result1);

            $ret = $this->data;
            $result = $this->Card->find('first', array(
                'conditions'=>array('Card.id'=>$this->data['Card']['id'])));

            if ( $ret ) {
                $this->flash('Tarjeta actualizada con exito','/cards/index');
            }
            else{
                $this->flash('Tarjeta NO actualizada','/cards/index');
            }
        }
	}

}