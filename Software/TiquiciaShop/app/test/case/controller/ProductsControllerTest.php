<?php
/**
 * Created by PhpStorm.
 * User: estebannoguerapenaranda
 * Date: 02/11/14
 * Time: 15:04
 */


App::uses('Product', 'Model');

class ProductsControllerTest extends ControllerTestCase {

    public $fixtures = array('app.product');

    public function setUp() {

        parent::setUp();

        $this->Product = ClassRegistry::init('Product');

    }


    public function testIndex() {

        $result1 = $this->testAction('/products/index');

        $expected = array(
            'Product' => array(
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
        );
        $result = Hash::extract($this->vars['products'], '{n}');

        $this->assertEquals($expected, $result['0']);

    }




    public function testSearchDelete() {
        $result = $this->testAction('/products/searchDelete/3');
        $expected = array(
            'Product' => array(
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
        );
        $this->assertEquals($this->vars['products'], $expected);
    }// fin de testSearchDelete()


    public function testDelete() {
        $expected = array(
            'Product' => array(
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
        );
        $this->testAction('/products/delete/',array('data' => $expected,'method' => 'post'));

    }//fin de testDelete


    public function testSearchUpdate() {

        $result = $this->testAction('/products/searchUpdate/3');

        $expected = array(
            'Product' => array(
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
        );
        $this->assertEquals($this->vars['products'], $expected);

    }// fin de testSearchUpdate()


    public function testUpdate() {

        $result = $this->Product->getAllProducts();

        $expected = array(
            'Product' => array(
                'id' => 3,
                'name' => 'Balon',
                'category' => 'Futbol',
                'subcategory' => 'Balones',
                'subsubcategory' => 'Plastico',
                'type' => 'Balon del FCBarcelona',
                'price' =>13500,
                'weight' => '15',
                'unit' => 'kilogramos',
                'filename' => Array(
                    'name' => '',
                    'type' =>'',
                    'tmp_name' =>'',
                    'error' => '4',
                    'size' => '0'),
                'dir' =>'img\uploads\product\filename',
                'created' => '2014-10-16 15:56:23',
                'update' => '2014-10-16 15:56:23',
                'keywords' => 'futbol',
                'stock' => '2',
                'state' => '0',
                'volumen' => 'NULL'),
        );

        $expected1 = array(
            'Product' => array(
                'id' => 3,
                'name' => 'Balon',
                'category' => 'Futbol',
                'subcategory' => 'Balones',
                'subsubcategory' => 'Plastico',
                'type' => 'Balon del FCBarcelona',
                'price' =>13500,
                'weight' => '15',
                'unit' => 'kilogramos',
                'filename' => Array(
                    'name' => 'tomcat.gif',
                    'type' =>'',
                    'tmp_name' =>'',
                    'error' => '4',
                    'size' => '0'),
                'dir' =>'img\uploads\product\filename',
                'created' => '2014-10-16 15:56:23',
                'update' => '2014-10-16 15:56:23',
                'keywords' => 'futbol',
                'stock' => '2',
                'state' => '0',
                'volumen' => 'NULL'),
        );



        $this->testAction('/products/update/',array('data' => $expected1,'method' => 'post'));

        $result2 = $this->Product->getProductsFiltrados(3);
        $this->assertTextNotContains($result2, $result);

    }//fin de testUpdate()


}