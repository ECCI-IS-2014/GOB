<?php
class ProductFixture extends CakeTestFixture {

      public $fields = array(
          'id' => array('type' => 'integer', 'key' => 'primary'),
          'name' => array('type' => 'string', 'length' => 40, 'null' => true),
          'category' => array('type' => 'string', 'length' => 40, 'null' => false),
		  'type' => array('type' => 'string', 'length' => 2000, 'null' => false),
		  'price' => array('type' => 'float', 'null' => false),
		  'weight' => array('type' => 'string', 'length' => 100, 'null' => false),
		  'filename' => array('type' => 'string', 'length' => 255, 'null' => true),
		  'dir' => array('type' => 'string', 'length' => 255, 'null' => true),		  
          'created' => 'datetime',
		  'keywords' => array('type' => 'string', 'length' => 2000, 'null' => true),
          'volumen' => array('type' => 'string', 'length' => 100, 'null' => true)
      );
	  
      public $records = array(
	  
          array(
		  'id' => 3,
		  'name' => 'Balon Barcelona',
		  'category' => 'Futbol',
		  'type' => 'Balon del FCBarcelona',
		  'price' =>13.500,
		  'weight' => '15',
		  'filename' => 'bolaBarca.jpg',
		  'dir' =>'img\uploads\product\filename',
		  'created' => '2014-10-16 15:56:23',
		  'keywords' => 'futbol',
		  'volumen' => 'NULL'),
          array(
              'id' => 4,
              'name' => 'Balon Nike',
              'category' => 'Futbol',
              'type' => 'Balon del FCNike',
              'price' =>13.500,
              'weight' => '15',
              'filename' => 'bolaNike.jpg',
              'dir' =>'img\uploads\product\filename',
              'created' => '2014-10-16 15:56:23',
              'keywords' => 'nike',
              'volumen' => 'NULL')
      );
 }