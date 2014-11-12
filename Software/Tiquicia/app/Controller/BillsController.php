<?php
/**
 * Created by PhpStorm.
 * User: Dayner Umaña
 * Date: 29/10/14
 * Time: 07:36 AM
 */
App::uses('AppController','Controller');
App::uses('Product','Model');
App::uses('User','Model');
App::uses('Cart', 'Model');
App::uses('CartsController', 'Controller');

class BillsController extends AppController {

    public $uses = array('Product','Cart');
    var $name = 'Bills';

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
		$result = $this->Cart->readProduct();
        $products = array();
        if (null!=$result) {
            foreach ($result as $productId => $count) {
                $product = $this->Product->read(null,$productId);
                $product['Product']['count'] = $count;
                $products[]=$product;
			}
			foreach($products as $p){
				$this->Bill->savefield('user_id',$this->Session->read('Auth.User.id'));
				$this->Bill->savefield('product_id',$p['Product']['id']);
				$this->Bill->savefield('product_name',$p['Product']['name']);
				$this->Bill->savefield('quantity',$p['Product']['count']);
				$this->Bill->savefield('date',date('Y-m-d H:i:s')); 
				$this->Bill->clear();
			}
        }
        $this->set(compact('products'));
		$this->Cart->clear();
    }
}