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

class SellsController extends AppController {

    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('index');
    }

    public function index() {
        //echo "Entro";

        $this->loadModel('Cart');
		$this->loadModel('Bill');
        $this->loadModel('Product');
        $result = $this->Cart->readProduct();
        $products = array();
        $fct = $this->Bill->findAllByUserId($this->Auth->user('id'));
        $id = $fct[0]['Bill']['id'];
        $fecha = $fct[1]['Bill']['date'];
        pr($id);
        foreach ($fct as $fcts){
            if($fecha<$fcts['Bill']['date']){
                $fecha = $fcts['Bill']['date'];
                $id = $fcts['Bill']['id'];
            }
        }
        pr($id);
        if (null!=$result) {
            foreach ($result as $productId => $count) {
                $product = $this->Product->read(null,$productId);
                $product['Product']['count'] = $count;
                $products[]=$product;
            }
            $this->set(compact('products'));
            pr($products['Product']);
            $cont = 0;
            foreach($products as $p){
                $this->Sell->savefield('bill_id',$id);
                $this->Sell->savefield('product_id',$p['Product']['id']);
                $this->Sell->savefield('product_name',$p['Product']['name']);
                $this->Sell->savefield('quantity',$p['Product']['count']);
                $this->Sell->savefield('price',$p['Product']['price']);
                $cont= $cont+1;
                $this->Sell->clear();
            }
                pr($cont);

        }
        $this->Cart->clear();

    }
}