<?php
/**
 * Created by PhpStorm.
 * User: Esteban Noguera
 * Date: 09/10/14
 * Time: 10:08 AM
 */
App::uses('AppController','Controller','File','Utility');



class ProductsController extends AppController {

    public $components = array(
        'Search.Prg'
    );



    public function index() {
        $this->Prg->commonProcess();
        $this->paginate = array(
            'conditions' => $this->Product->parseCriteria($this->passedArgs));
        $this->set('products', $this->paginate());
    }//fin de index


    public function busqueda() {
        $this->Prg->commonProcess();
        $this->paginate = array(
            'conditions' => $this->Product->parseCriteria($this->passedArgs));
        $this->set('products', $this->paginate());
    }//fin de index

    function delete(){


        if (!empty($this->data)) {

            $pd = $this->Product->read(null,$this->data['Product']['id']);

            $this->set('product',$pd);

            $this->Product->delete($this->request->data('product.id'));

            $this->flash('Producto eliminado con exito','/products/index');

        }

    }//fin de delete

    function searchDelete($products){

        if (!empty($products)) {

            $result = $this->Product->find('first', array(
                'conditions'=>array('Product.id'=>$products)));


            if(sizeof($result) >= 1){

                $this->set('products', $result);

            }
            else{

                $this->flash('id producto incorrecto','/products/index');
            }

        }//fin de if

    }//fin de searchUpdate


    function searchInfo($products){

        if (!empty($products)) {

            $result = $this->Product->find('first', array(
                'conditions'=>array('Product.id'=>$products)));


            if(sizeof($result) >= 1){

                $this->set('products', $result);

            }
            else{

                $this->flash('id producto incorrecto','/products/index');
            }

        }//fin de if

    }//fin de searchUpdate



     function update(){


        if($this->request->is('post') || $this->request->is('put')) {

            $this->Product->create();

            $result1 = $this->Product->find('first', array(
                'conditions'=>array('Product.id'=>$this->data['Product']['id'])));


            if(empty($this->data['Product']['filename']['name'])){


                $result1['Product']['id'] = $this->data['Product']['id'];
                $result1['Product']['name'] = $this->data['Product']['name'];
                $result1['Product']['type'] = $this->data['Product']['type'];
                $result1['Product']['price'] = $this->data['Product']['price'];
                $result1['Product']['weight'] = $this->data['Product']['weight'];
                $result1['Product']['keywords'] = $this->data['Product']['keywords'];
                $result1['Product']['stock'] = $this->data['Product']['stock'];
                $result1['Product']['category'] = $this->data['Product']['category'];

                $this->Product->save($result1);


            }else{//caso donde debe cambiar la imagen

                $image1 =  $result1['Product']['filename'];

                $result1['Product']['id'] = $this->data['Product']['id'];
                $result1['Product']['name'] = $this->data['Product']['name'];
                $result1['Product']['type'] = $this->data['Product']['type'];
                $result1['Product']['price'] = $this->data['Product']['price'];
                $result1['Product']['weight'] = $this->data['Product']['weight'];
                $result1['Product']['keywords'] = $this->data['Product']['keywords'];
                $result1['Product']['stock'] = $this->data['Product']['stock'];
                $result1['Product']['filename'] = $this->data['Product']['filename'];
                $result1['Product']['category'] = $this->data['Product']['category'];


                $this->Product->save($result1);

                $result2 = $this->Product->find('first', array(
                    'conditions'=>array('Product.id'=>$this->data['Product']['id'])));



                $file = new File(WWW_ROOT . $result1['Product']['dir'].DS.$image1, false, 0777);

                if($file->delete()) {


                    move_uploaded_file($this->data['Product']['filename']['tmp_name'], WWW_ROOT .DS.$result1['Product']['dir'].DS. $this->data['Product']['filename']['name']);

                }
                else{

                }

            }

            $ret = $this->data;
            $result = $this->Product->find('first', array(
                'conditions'=>array('Product.id'=>$this->data['Product']['id'])));

            if ( $ret ) {


                $this->flash('Producto actualizado con exito','/products/index');
            }
            else{

                $this->flash('Producto NO actualizado','/products/index');

            }
        }

    }//fin de update


    function searchUpdate($products){



        if (!empty($products)) {

            $result = $this->Product->find('first', array(
                'conditions'=>array('Product.id'=>$products)));




            if( sizeof($result) >= 1 ){

                $this->set('products', $result);

                //pr($result);

            }
            //else{

              //  $this->flash('id producto incorrecto','/products/index');
            //}

        }//fin de if

    }//fin de searchUpdate

    function add() {

        if (!empty($this->data)) {
            if ($this->Product->save($this->request->data)) {

                $this->flash('Producto añadido','/products');
            }
        }
    }//fin de add

}