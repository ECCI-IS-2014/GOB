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
        $this->Auth->allow('payment','index');
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

    public function payment(){
        $this->loadModel('Bill');
        $this->loadModel('Card');
        $this->Bill->savefield('user_id', $this->Session->read('Auth.User.id'));
        $this->Bill->savefield('date', date('Y-m-d H:m:s'));
        $c = $this->Card->find('all', array('conditions'=>array('Card.user_id'=> $this->Auth->user('id'))));
        $this->set('cards',$c);


    }
}