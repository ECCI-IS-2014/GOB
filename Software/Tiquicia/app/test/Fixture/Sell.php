<?php
/**
 * Created by PhpStorm.
 * User: Dayner Umaña
 * Date: 01/11/14
 * Time: 10:59 AM
 */

class SellFixture extends CakeTestFixture {

    public $fields = array(
        'id' => array('type' => 'integer', 'key' => 'primary'),
        'product_id' => array('type' => 'integer', 'null' => false),
        'product_name' => array('type' => 'varchar(40)', 'null' => false),
        'price' => array('type' => 'integer', 'null' => false),
        'quantity' => array('type' => 'integer', 'null' => false),
        'bill_id' => array('type' => 'integer', 'null' => false)
    );

    public $records = array(

        array(
            'id' => 1,
            'product_id'=>4,
            'product_name'=>1,
            'price' => 1,
            'quantity'=>4,
            'bill_id'=>1
        ),
        array(
            'id' => 1,
            'product_id'=>5,
            'product_name'=>1,
            'price' => 1,
            'quantity'=>4,
            'bill_id'=>2
        ),
    );
}