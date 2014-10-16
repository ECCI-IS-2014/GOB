<?php
/**
 * Created by PhpStorm.
 * User: Dayner Umaña
 * Date: 11/10/14
 * Time: 11:58 AM
 */

App::uses('AppController','Controller');

class KeywordsController extends AppController {

    var $name = 'Keywords';

    function add($product_id = false) {

        if (!empty($this->data)) {
            $this->Keyword->create();
            if ($this->Keyword->save($this->data)) {
                $this->redirect('/products/');
            }
        } else {
            $this->set('product_id', $product_id);
        }
    }
}