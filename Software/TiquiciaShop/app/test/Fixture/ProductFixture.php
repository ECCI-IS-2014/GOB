<?php
/**
 * Created by PhpStorm.
 * User: estebannoguerapenaranda
 * Date: 01/11/14
 * Time: 09:01
 */

class ProductFixture extends CakeTestFixture {

    public $fields = array(

        'id' => array('type' => 'integer', 'key' => 'primary'),
        'name' => array('type' => 'string', 'length' => 40, 'null' => true),
        'category' => array('type' => 'string', 'length' => 40, 'null' => false),
        'subcategory' => array('type' => 'string', 'length' => 40, 'null' => false),
        'subsubcategory' => array('type' => 'string', 'length' => 40, 'null' => false),
        'type' => array('type' => 'string', 'length' => 2000, 'null' => false),
        'price' => array('type' => 'float', 'null' => false),
        'weight' => array('type' => 'string', 'length' => 100, 'null' => false),
        'unit' => array('type' => 'string', 'length' => 40, 'null' => true),
        'filename' => array('type' => 'string', 'length' => 255, 'null' => true),
        'dir' => array('type' => 'string', 'length' => 255, 'null' => true),
        'created' => 'datetime',
        'update' => 'datetime',
        'keywords' => array('type' => 'string', 'length' => 2000, 'null' => true),
        'stock'=> array('type' => 'integer', 'length' => 11, 'null' => false),
        'state'=> array('type' => 'integer', 'length' => 11, 'null' => false),
        'volumen' => array('type' => 'string', 'length' => 100, 'null' => true)
    );

    public $records = array(

        array(
            'id' => 3,
            'name' => 'Balon Barcelona',
            'category' => 'Futbol',
            'subcategory' => 'Balones',
            'subsubcategory' => 'Cuero',
            'type' => 'Balon del FCBarcelona',
            'price' =>13.500,
            'weight' => '15',
            'unit' => 'kilogramos',
            'filename' => 'bolaBarca.jpg',
            'dir' =>'img\uploads\product\filename',
            'created' => '2014-10-16 15:56:23',
            'update' => '2014-10-16 15:56:23',
            'keywords' => 'futbol',
            'stock' => '4',
            'state' => '1',
            'volumen' => 'NULL'),
        array(
            'id' => 4,
            'name' => 'Balon Nike',
            'category' => 'Futbol',
            'subcategory' => 'Balones',
            'subsubcategory' => 'Cuero',
            'type' => 'Balon del FCNike',
            'price' =>13.500,
            'weight' => '15',
            'unit' => 'kilogramos',
            'filename' => 'bolaNike.jpg',
            'dir' =>'img\uploads\product\filename',
            'created' => '2014-10-16 15:56:23',
            'update' => '2014-10-16 15:56:23',
            'keywords' => 'nike',
            'stock' => '4',
            'state' => '0',
            'volumen' => 'NULL')
    );
}