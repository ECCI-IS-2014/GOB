<?php
/**
 * Created by PhpStorm.
 * User: Dayner Umaña
 * Date: 19/10/14
 * Time: 04:52 PM
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
                'type' => 'Balon del FCBarcelona',
                'price' =>13.500,
                'weight' => '15',
                'filename' => 'bolaBarca.jpg',
                'dir' =>'img\uploads\product\filename',
                'created' => '2014-10-16 15:56:23',
                'keywords' => 'futbol',
                'volumen' => 'NULL')
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
                'type' => 'Balon del FCBarcelona',
                'price' =>13.500,
                'weight' => '15',
                'filename' => 'bolaBarca.jpg',
                'dir' =>'img\uploads\product\filename',
                'created' => '2014-10-16 15:56:23',
                'keywords' => 'futbol',
                'volumen' => 'NULL')
        );

        $this->assertEquals($this->vars['products'], $expected);

    }// fin de testSearchDelete()

    public function testDelete() {

        $expected = array(
            'Product' => array(
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
                'volumen' => 'NULL')
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
                'type' => 'Balon del FCBarcelona',
                'price' =>13.500,
                'weight' => '15',
                'filename' => 'bolaBarca.jpg',
                'dir' =>'img\uploads\product\filename',
                'created' => '2014-10-16 15:56:23',
                'keywords' => 'futbol',
                'volumen' => 'NULL')
        );

        $this->assertEquals($this->vars['products'], $expected);

    }// fin de testSearchUpdate()


    public function testUpdate() {

        $result = $this->Product->getAllProducts();

        $expected = Array
        (
            'Product' => array(
                'id' => 3,
                'name' => 'Balon',
                'category' => 'Futbol',
                'type' => 'Champions League',
                'price' =>12000,
                'weight' => '2',
                'keywords' => 'Futbol',
                'filename' => Array
                (
                    'name' =>'',
                    'type' =>'',
                    'tmp_name' =>'',
                    'error' => '4',
                    'size' => '0'))

        );

        $expected2 = Array
        (
            'Product' => array(
                'id' => 3,
                'name' => 'Balon',
                'category' => 'Futbol',
                'type' => 'Champions League',
                'price' =>12000,
                'weight' => '2',
                'keywords' => 'Futbol',
                'filename' => Array
                (
                    'name' =>'tomcat.gif',
                    'type' =>'image/gif',
                    'tmp_name' =>'',
                    'error' => '0',
                    'size' => '1934'))
        );

        $this->testAction('/products/update/',array('data' => $expected,'method' => 'post'));

        $result2 = $this->Product->getProductsFiltrados(3);

        $this->assertTextNotContains($result2, $result);


    }//fin de testUpdate()

    public function testAdd() {
        $insercion =
            array
            (
                'Product' => array
                    (
                        'name' => 'Barca',
            'category' => 'Futbol',
            'dir' => 'NULL',
            'type' => 'Balon Nike',
            'price' => 2326,
            'weight' => '2323',
            'volumen' => '2323',
            'keywords' => 'bola')

        );




        $this->testAction('/products/add', array('data' => $insercion, 'method' => 'post'));
        //$result = $this->Product->getProductsFiltrados(5);
        //$this->assertEquals($expected, $result);
    }

    public function testbusqueda() {



        $this->testAction('/products/index?keywords=futbol&type=Balon del FCBarcelona');

        $expected = array(
            'Product' => array(
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
                'volumen' => 'NULL')
        );
        pr($this->vars['products']);
        $result = Hash::extract($this->vars['products'], '{n}');

        $this->assertEquals($expected, $result[0]);

    }

}