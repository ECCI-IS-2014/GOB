<?php
App::uses('Product', 'Model');

class ProductTest extends CakeTestCase {

    public $fixtures = array('app.product');

    public function setUp() {
        parent::setUp();
        $this->Product = ClassRegistry::init('Product');
    }

    public function testGetAllProducts() {
	
        $result = $this->Product->getAllProducts();
		
        $expected = array(
            array('Product' => array('id' => 3,
			'name' => 'Balon Barcelona',
			'category' => 'Futbol',
			'type' => 'Balon del FCBarcelona',
			'price' =>13.500,
			'weight' => '15',
			'filename' => 'bolaBarca.jpg',
			'dir' =>'img\uploads\product\filename',
			'created' => '2014-10-16 15:56:23',
			'keywords' => 'futbol', 
			'volumen' => 'NULL'))
            //array('Product' => array('id' => 4, 'name' => 'Balon Champions')),
            //array('Product' => array('id' => 5, 'name' => 'Balon Baloncesto'))
        );

        $this->assertEquals($expected, $result);
    }
}