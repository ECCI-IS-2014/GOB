<?php
/**
 * Created by PhpStorm.
 * User: Alejandro Cordoba
 * Date: 29/10/14
 * Time: 07:36 AM
 */
App::uses('AppController','Controller');
App::uses('Product','Model');
App::uses('User','Model');
App::uses('Cart', 'Model');
App::uses('Card', 'Model');
App::uses('CartsController', 'Controller');

class BillsController extends AppController {

    public function beforeFilter() {
        parent::beforeFilter();
        $this->loadModel('Cart');
        $this->Auth->allow('payment','mybill','index');
    }

    public $uses = array('Product','Cart');
    var $name = 'Bills';
    var $num = 0;

    public function index() {
        //echo "Entro";

        $this->loadModel('Cart');
		$this->loadModel('Bill');

        if ($this->request->is('post')) {
            if (!empty($this->request->data)) {
                $cart = array();
                foreach ($this->request->data['Cart']['count'] as $index=>$count) {
                    if ($count>0 && $count<10) {
                        $productId = $this->request->data['Cart']['product_id'][$index];
                        $cart[$productId] = $count;
                    }
                }
                $this->Cart->saveProduct($cart);
            }

        }
        $this->Cart->clear();

    }

    public function payment($id){
        $this->loadModel('Cart');
        $this->loadModel('Bill');
        $this->loadModel('Card');
		$this->loadModel('Address');
		$result = $this->Address->find('first',array('conditions'=>array('Address.id'=>$id)));
		$this->set('country',$result);
        $this->Cart->create();
        $carts = $this->Cart->readProduct();
        $products = array();
        if (null!=$carts) {
            foreach ($carts as $productId => $count) {
                $product = $this->Product->read(null,$productId);
                $product['Product']['count'] = $count;
                $products[]=$product;
            }
        }
        $this->set(compact('products'));
        $this->Bill->savefield('user_id', $this->Session->read('Auth.User.id'));
        $this->Bill->savefield('date', date('Y-m-d H:m:s'));
		$this->Bill->savefield('status', "No despachado");
        $c = $this->Card->find('all', array('conditions'=>array('Card.user_id'=> $this->Auth->user('id'))));
        $this->set('cards',$c);
    }
	
	 public function mybill(){

        $this->loadModel('Bill');
        $idBill = $this->Bill->find('all', array('conditions'=>array( 'Bill.user_id'=>$this->Auth->user('id'))));
        $this->set('bills',$idBill);
    }
}