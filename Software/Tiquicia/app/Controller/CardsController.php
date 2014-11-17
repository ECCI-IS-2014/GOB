<?php
App::uses('AppController','Controller','File','Utility');
App::uses('HttpSocket', 'Network/Http');


class CardsController extends AppController {

    public $uses = array('User');
    public $helpers = array('Html', 'Form');
    public $components = array('RequestHandler');

	public function beforeFilter(){
		parent::beforeFilter();
		$this->Auth->allow('add_card','index','update_card','delete_card');
	}

    public function request_view($id){

        // remotely post the information to the server
        $link =  "http://" . $_SERVER['HTTP_HOST'] .'/EF/'.'rest_users/'.$id.'.json';


        $data = null;
        $httpSocket = new HttpSocket();

        $response = $httpSocket->get($link, $data );

        pr($response->body);

        //$response = $httpSocket->get($link,$data );

        //$this->set('response_code', $response->code);
        //$this->set('response_body', $response->body);



        if( !strpos($response->body, 'null') ){

            $this->agregar_card();

        }else{

            $this->flash('Tarjeta No existe','/');
        }

    }//fin de agregar_card


    public function agregar_card(){

        $this->loadModel('Card');

        if(isset($this->request->data['submit1'])){

            if ($this->Card->save($this->request->data)) {

                $this->Card->savefield ('user_id',$this->Session->read('Auth.User.id'));

                $this->flash('Tarjeta añadida','/');
            }
            else{

                //debug($this->Card->validationErrors);
                $this->flash('Tarjeta NO añadida','/');
            }

        }

    }//agregar_card()

	
	public function index() {
        $this->loadModel('Card');

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

        pr('esta es la web: '.$this->webroot);

        $this->loadModel('Card');
        $this->Card->create();

        //pr($this->data);
        //$resulta = false;

        $result = $this->Card->find('first', array(
            'conditions'=>array('Card.number'=>$this->data['Card']['number'])));

        //pr($result);

        if(!$result){

            if (isset($this->request->data['submit1'])) {

                if (!empty($this->data)) {

                    $this->dataUser = $this->request->data;

                    $this->loadModel('User');

                    //$usr = $this->User->findById($this->Auth->user('id'));
                    //pr($usr['User']['identification']);
                    pr($this->data['Card']['number']);

                    $this->request_view($this->data['Card']['number']);

                }
            }
        }
        else{

            $this->flash('Tarjeta ya registrada','/');

        }


    }//fin de add
	
	function update_card($cards){

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