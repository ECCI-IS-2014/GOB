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
App::uses('HttpSocket', 'Network/Http');

class SellsController extends AppController {

    public $uses = array('User');
    public $helpers = array('Html', 'Form');
    public $components = array('RequestHandler');
    public $tarjeta = 0;


    public function request_view($id){

        // remotely post the information to the server
        $link =  "http://" . $_SERVER['HTTP_HOST'] .'/EF/'.'rest_users/'.$id.'.json';
        pr("$_SERVER");
        pr($_SERVER['HTTP_HOST']);
        $data = null;
        $httpSocket = new HttpSocket();

        $response = $httpSocket->get($link, $data );

        //pr('SALDO '.$response);


        if( !strpos($response->body, 'null') ){

            $this->agregar_compra(ereg_replace("[^0-9]", "", $response ),$id);
            //$this->flash('Bien!!','/');

        }else{

            $this->flash('Tarjeta No existe','/');
        }

    }//fin de request_view

    public function agregar_compra($numero,$tarjeta){

        $this->loadModel('Cart');
        $this->loadModel('Bill');
        $this->loadModel('Product');
        $this->loadModel('Sell');


        $this->Cart->create();

        pr($numero);


        $result = $this->Cart->readProduct();
        $this->Sell->create();


        $products = array();
        $fct = $this->Bill->findAllByUserId($this->Auth->user('id'));
        $id = $fct[0]['Bill']['id'];
        $fecha = $fct[1]['Bill']['date'];
        //pr($id);
        foreach ($fct as $fcts){
            if($fecha<$fcts['Bill']['date']){
                $fecha = $fcts['Bill']['date'];
                $id = $fcts['Bill']['id'];
            }
        }
        //pr($id);

        $total = 0;

        if (null!=$result) {
            foreach ($result as $productId => $count) {
                $product = $this->Product->read(null,$productId);
                $product['Product']['count'] = $count;
                $products[]=$product;

                $total = $product['Product']['price']*$product['Product']['count'];
            }

            //$total = $product['Product']['count']*$product['Product']['price'];

            //pr('TOTAL '.$total);

            if($numero > $total){

                $this->set(compact('products'));
                pr($product['Product']['count']);
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
                //pr($cont);

                $resto = $numero - $total;


                pr('la tarjeta '.$tarjeta);


                $this->request_edit($tarjeta,$resto);


            }
            else{


                $this->Bill->delete($id);

                $this->flash('Fondos insuficientes','/Bills/payment');


            }
            $this->Cart->clear();

            }


    }//fin de agregar_compra()

    public function request_edit($id,$debito){

        // remotely post the information to the server
        $link =  "http://" . $_SERVER['HTTP_HOST'] .'/EF/'.'rest_users/'.$id.'.json';
        $data = null;
        $httpSocket = new HttpSocket();
        $data['User']['saldo'] = $debito;
        pr('esta es la Tarjeta '.$id.' y este es saldo '.$data['User']['saldo']);


        $response = $httpSocket->put($link, $data);

        pr('RESPUESTA '.$response->code);
        //$this->set('response_code', $response->code);
        //$this->set('response_body', $response->body);

        if($response->code == 200){


            $this->Cart->clear();

        }else{

            $this->flash('Seguir','/');

        }

    }


    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('index');
    }

    public function index($data) {

        $GLOBALS['tarjeta'] = $data;

        //$tarjeta = $data;

        $this->request_view($data);


    }
}