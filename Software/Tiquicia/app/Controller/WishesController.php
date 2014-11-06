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

class WishesController extends AppController {



    var $name = 'Wishes';

    function searchAdd($products) {
        $this->loadModel('Product');
        $this->loadModel('User');
        if (!empty($products)) {

            $result = $this->Product->find('first', array(
                'conditions'=>array('Product.id'=>$products)));
            $result2 = $this->User->find('first', array(
                'conditions'=>array('User.id'=>$this->Auth->user('id'))));
            $id = $result['Product']['id'];
            if( sizeof($result) >= 1 ){

                $this->set('products', $result);
                pr($this->set('products', $result));
                pr($this->set('users', $result2));
                $this->set('users', $result2);

            }
        }//fin de if
    }

    function add() {
        $opciones1 = array('conditions' => array('Wish.product_id' => $this->data['Wish']['product_id'] ,
                                                 'Wish.user_id' => $this->Auth->user('id')));
        $condicion1 = $this->Wish->find('first',$opciones1);

        pr(empty($condicion1));
      if(empty($condicion1)){
        if (!empty($this->data)) {

            $this->Wish->create();
            if ($this->Wish->save($this->data)) {
                $this->flash('Deseo anadido','/Wishes');
            }
        }
       }
       else{

           $this->flash('Producto no agregado <br>Producto ya esta incluido en su lista de deseos intente agregar otro!','/Wishes');

       }
    }

    function index() {
        $wiii1 = $this->Wish->find('all', array('conditions'=>array('Wish.user_id'=> $this->Auth->user('id'))));
        $this->set('Wish',$wiii1);
    }

    function prueba(){
        $wiii1 = $this->Wish->find('all', array('conditions'=>array('Wish.user_id'=> 1),'fields' => array('id','user_id','product_id')));
        $this->set('Wishes',$wiii1);
    }

    function delete($idwish){
        pr($idwish);
        $this->Wish->delete($idwish);
        $this->flash('Producto eliminado de la lista de deseos','/Wishes');
    }
}