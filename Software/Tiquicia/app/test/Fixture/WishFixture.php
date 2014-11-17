<?php
/**
 * Created by PhpStorm.
 * User: Dayner Umaña
 * Date: 01/11/14
 * Time: 10:59 AM
 */

class WishFixture extends CakeTestFixture {

    public $fields = array(
        'id' => array('type' => 'integer', 'key' => 'primary'),
        'product_id' => array('type' => 'integer', 'null' => false),
        'user_id' => array('type' => 'integer', 'null' => false),
        'created' => 'datetime'
    );

    public $records = array(

        array(
            'id' => 1,
            'product_id'=>4,
            'user_id'=>1,
            'created' => '2014-10-16 15:56:23'
            ),
        array(
            'id' => 2,
            'product_id'=>5,
            'user_id'=>2,
            'created' => '2014-10-16 15:56:23'
            ),
    );
}