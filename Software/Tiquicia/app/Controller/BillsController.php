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

    public function index(){

        $this->loadModel('Cart');

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
    }

    public function add(){
        if (!empty($this->data)) {
            if ($this->Product->save($this->request->data)) {
                $this->flash('Factura guardada','/Bills');
            }
        }
    }
}