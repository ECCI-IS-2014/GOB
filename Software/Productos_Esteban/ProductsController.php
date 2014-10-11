<?php
/**
 * Created by PhpStorm.
 * User: Esteban Noguera
 * Date: 09/10/14
 * Time: 10:08 AM
 */
App::uses('AppController','Controller');

class ProductsController extends AppController {


    function index() {

    }

    function delete(){


        if (!empty($this->data)) {

        $pd = $this->Product->read(null,$this->data['Product']['id']);

        $this->set('product',$pd);

        $this->Product->delete($this->request->data('product.id'));

        $this->flash('Producto eliminado con exito','/products/index');

        }


    }//fin de delete

    function searchDelete(){

        if (!empty($this->data)) {

            $result = $this->Product->find('first', array(
                'conditions'=>array('Product.id'=>$this->data['Product']['id'])));


            if(sizeof($result) >= 1){

                $this->set('products', $result);

            }
            else{

                $this->flash('id producto incorrecto','/products/index');
            }

        }//fin de if

    }

    function update(){


        if($this->request->is('post') || $this->request->is('put')) {

            $ret = $this->Product->save($this->data['Product']);


            if ( $ret ) {


                $this->flash('Producto actualizado con exito','/products/index');
            }
            else{

                $this->flash('Producto NO actualizado','/products/index');

                //debug($this->Product->validationErrors);

            }
        }

    }//fin de update

    function searchUpdate(){

        if (!empty($this->data)) {

            $result = $this->Product->find('first', array(
                'conditions'=>array('Product.id'=>$this->data['Product']['id'])));


            if(sizeof($result) >= 1){

                $this->set('products', $result);

            }
            else{

                $this->flash('id producto incorrecto','/products/index');
            }

        }//fin de if

    }

}