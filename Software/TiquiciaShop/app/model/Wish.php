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
}