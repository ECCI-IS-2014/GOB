<?php
/**
 * Created by PhpStorm.
 * User: Dayner Umaña
 * Date: 02/11/14
 * Time: 10:33 AM
 */

App::uses('Wish', 'Model');

class WishesControllerTest extends ControllerTestCase {

    public $fixtures = array('app.product','app.user','app.wish');

    public function setUp() {
        parent::setUp();
        $this->Wish = ClassRegistry::init('Wish');
    }


    //Se usa para probar el index
    public function testPrueba() {

        $result1 = $this->testAction('/wishes/prueba/');

        $expected =
            array( 'Wish' =>
                array(
                    'id' => 1,
                    'product_id'=>4,
                    'user_id'=>1
        ));
        $result = Hash::extract($this->vars['Wishes'], '{n}');
        $this->assertEquals($expected, $result['0']);

    }


    public function testDelete(){
        $result1 = $this->testAction('/wishes/prueba/');
        $expected1 =
            array( 'Wish' =>
                array(
                    'id' => 1,
                    'product_id'=>4,
                    'user_id'=>1
                ));
        $result = Hash::extract($this->vars['Wishes'], '{n}');
        $this->assertEquals($expected1, $result['0']);

        $this->testAction('/wishes/delete/1');
        $result1 = $this->testAction('/wishes/prueba/');
        $result = Hash::extract($this->vars['Wishes'], '{n}');
        $this->assertNotEquals($expected1, $result);
    }


    public function testAdd() {
        $insercion =  array( 'Wish' =>
            array(
                'id' => 3,
                'product_id'=>4,
                'user_id'=>1
        ));

        $expected =  array( 'Wish' =>
            array(
                'id' => 3,
                'product_id'=>4,
                'user_id'=>1
            ));

        $this->testAction('/wishes/add', array('data' => $insercion, 'method' => 'post'));
        $result = $this->Wish->getWishesFiltrados(3);
        $this->assertEquals($insercion, $expected);
        $this->assertEquals($expected, $result);
    }

}