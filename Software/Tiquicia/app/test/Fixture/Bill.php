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
        'user_id' => array('type' => 'integer', 'null' => false),
        'date' => 'timestamp'
    );

    public $records = array(

        array(
            'id' => 1,
            'user_id'=>1,
            'date' => '2014-10-16 15:56:23'
        ),
        array(
            'id' => 2,
            'user_id'=>2,
            'date' => '2014-10-16 15:56:23'
        ),
    );
}