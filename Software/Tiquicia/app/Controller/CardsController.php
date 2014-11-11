<?php
App::uses('AppController','Controller','File','Utility');
class CardsController extends AppController {
	public function beforeFilter(){
		parent::beforeFilter();
		$this->Auth->allow('add_card','index','update_card','delete_card');
	}
	
	public function index() {
        $c = $this->Card->find('all', array('conditions'=>array('Card.user_id'=> $this->Auth->user('id'))));
        $this->set('cards',$c);
    }
	
    function delete_card($cards){
	    if (!empty($cards)) {
            $result = $this->Card->find('first', array(
				'conditions'=>array('Card.id'=>$cards)));
            if( sizeof($result) >= 1 ){
                $this->set('cards', $result);
            }
        }//fin de if
		if (!empty($this->data)) {
            $pd = $this->Card->read(null,$this->data['Card']['id']);
            $this->set('card',$pd);
            $this->Card->delete($this->request->data('card.id'));
            $this->flash('Tarjeta eliminada con exito','/cards/index');
        }
    }//fin de delete

    function add_card() {

        if (isset($this->request->data['submit1'])) {
            if (!empty($this->data)) {
                if ($this->Card->save($this->request->data)) {
					$this->Card->savefield ('user_id',$this->Session->read('Auth.User.id'));
                    $this->flash('Tarjeta añadida','/Cards/');
                }
            }
        }

    }//fin de add
	
	function update_card($cards){
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