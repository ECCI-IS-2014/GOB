<?php
/**
 * Created by PhpStorm.
 * User: Dayner Umaña
 * Date: 01/11/14
 * Time: 11:33 AM
 */

class ProductFixture extends CakeTestFixture {

    public $fields = array(
        'id' => array('type' => 'integer', 'key' => 'primary'),
        'name' => array('type' => 'string', 'length' => 40, 'null' => true),
        'category' => array('type' => 'string', 'length' => 40, 'null' => true),
        'subcategory' => array('type' => 'string', 'length' => 40, 'null' => true),
        'subsubcategory' => array('type' => 'string', 'length' => 40, 'null' => true),
        'type' => array('type' => 'string', 'length' => 2000, 'null' => false),
        'price' => array('type' => 'float', 'null' => false),
        'weight' => array('type' => 'float', 'null' => false),
        'unit' => array('type' => 'string', 'length' => 40, 'null' => true),
        'filename' => array('type' => 'string', 'length' => 255, 'null' => true),
        'dir' => array('type' => 'string', 'length' => 255, 'null' => true),
        'keywords' => array('type' => 'string', 'length' => 2000, 'null' => true),
        'volumen' => array('type' => 'string', 'length' => 100, 'null' => true),
        'created' => 'datetime',
        'updated' => 'datetime',
        'stock' => array('type' => 'integer', 'null' => false),
        'state' => array('type' => 'integer', 'null' => false),
        'category_id' => array('type' => 'integer', 'null' => false),
        'subcategory_id' => array('type' => 'integer', 'null' => false),
        'subsubcategory_id' => array('type' => 'integer', 'null' => false),
    );

    public $records = array(

        array(
            'id' => 4,
            'name' => 'Balon Nike',
            'category' => 'Futbol',
            'subcategory' => 'Balones',
            'subsubcategory' => 'Nike',
            'type' => 'El mejor balon de todos',
            'price' => 450,
            'weight' => 3,
            'unit' => 'Kg',
            'filename' => 'bolaNike.jpg',
            'dir' => 'img\uploads\product\filename',
            'keywords' => 'nike Balon',
            'volumen' =>50,
            'created' => '2014-10-16 15:56:23',
            'updated' => '2014-10-17 15:56:23',
            'stock' => 15,
            'state' => 1,
            'category_id' => 3,
            'subcategory_id' => 4,
            'subsubcategory_id' => 1),
        array(
            'id' => 5,
            'name' => 'Raquetas',
            'category' => 'Tenis',
            'subcategory' => 'Msdera',
            'subsubcategory' => 'Pintadas a mano',
            'type' => 'La mejor raqueta de todas',
            'price' => 450,
            'weight' => 3,
            'unit' => 'Kg',
            'filename' => 'raquetas.jpg',
            'dir' => 'img\uploads\product\filename',
            'keywords' => 'tenis raquetas',
            'volumen' =>50,
            'created' => '2014-10-16 15:56:23',
            'updated' => '2014-10-17 15:56:23',
            'stock' => 15,
            'state' => 1,
            'category_id' => 3,
            'subcategory_id' => 4,
            'subsubcategory_id' => 1),
    );
}