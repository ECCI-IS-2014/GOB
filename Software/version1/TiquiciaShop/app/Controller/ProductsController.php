<?php
/**
 * Created by PhpStorm.
 * User: Dayner Umaña
 * Date: 09/10/14
 * Time: 10:08 AM
 */
App::uses('AppController','Controller');
class ProductsController extends AppController {

    var $name = 'Products';

    function add() {
        if (!empty($this->data)) {
            $this->Product->create();
            if ($this->Product->save($this->data)) {
                $this->flash('Producto añadido','/products');
            }
        }
    }

    function index() {
        $this->set('products', $this->Product->find('all'));
    }
}