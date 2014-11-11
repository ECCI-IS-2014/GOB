<?php
/**
 * Created by PhpStorm.
 * User: Alejandro Córdoba
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
        }
        $this->set(compact('products'));

       pr($products[0]['Product']['name']);
        if(isset($this->request->data['submit1'])){
            $result = $this->Cart->readProduct();
            $products = array();
            if (null!=$result) {
                foreach ($result as $productId => $count) {
                    $product = $this->Product->read(null,$productId);
                    $product['Product']['count'] = $count;
                    $products[]=$product;
                }
            }
            $this->Bill->savefield('name',$products[0]['Product']['name']);
            //$this->flash('mensajito','/');
        }

    }
}