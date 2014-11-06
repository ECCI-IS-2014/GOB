<?php
/**
 * Created by PhpStorm.
 * User: Dayner Umaña
 * Date: 29/10/14
 * Time: 05:01 AM
 */
class Wish extends AppModel {
    var $name = 'Wish';

    var $belongsTo = array('User' => array('className' => 'User'),'Product' => array('className' => 'Product'));


    //Probando:Obtener todo de la base de datos.
    public function getAllWishes(){
        return $this->find('all',array(
            'fields' => array('id','user_id','product_id')));
    }

    //Probando:Obtener todo de la base de datos según Id.
    public function getWishesFiltrados($id = null) {
        return $this->find('first', array(
            'conditions' => array('Wish.id' => $id),
            'fields' => array('id','user_id','product_id')
        ));
    }
}