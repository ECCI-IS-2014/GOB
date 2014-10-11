<?php
/**
 * Created by PhpStorm.
 * User: Dayner Umaña
 * Date: 11/10/14
 * Time: 11:49 AM
 */
class Keyword extends AppModel {
    var $name = 'Keyword';

    var $belongsTo = array('Product' => array('className' => 'Product'));

    var $validate = array(
        'palabraclave' => array(
            'rule' => array('maxLength', '40'),
            'required' => true,
            'allowEmpty' => false,
            'message' => 'Necesario'
        )
    );
}