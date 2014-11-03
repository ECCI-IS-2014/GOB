<?php
/**
 * Created by PhpStorm.
 * User: estebannoguerapenaranda
 * Date: 02/11/14
 * Time: 17:49
 */

class CategoryFixture extends CakeTestFixture {


    public $fields = array(

        'id' => array('type' => 'integer', 'key' => 'primary'),
        'name' => array('type' => 'string', 'length' => 40, 'null' => true)
    );

    public $records = array(

        array(
            'id' => 1,
            'name' =>'Futbol'
        ),
        array(
            'id' => 2,
            'name' =>'Baloncesto'
        ),
    );


}