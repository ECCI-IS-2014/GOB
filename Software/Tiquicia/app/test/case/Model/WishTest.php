<?php
/**
 * Created by PhpStorm.
 * User: Dayner Umaña
 * Date: 01/11/14
 * Time: 11:15 AM
 */

App::uses('Wish', 'Model');

class WishTest extends CakeTestCase {

    public $fixtures = array('app.product','app.user','app.wish');

    public function setUp() {
        parent::setUp();
        $this->Wish = ClassRegistry::init('Wish');
    }



    public function testGetAllWishes() {

        $result = $this->Wish->getAllWishes();

        $expected = array(

            array( 'Wish' =>
                array(
                'id' => 1,
                'product_id'=>4,
                'user_id'=>1
                )),
                array( 'Wish' =>
                array('id' => 2,
                'product_id'=>5,
                'user_id'=>2
                ))
        );

        $this->assertEquals($expected, $result);
      }


    public function testGetWishesFiltrados(){
        $result = $this->Wish->getWishesFiltrados(1);
        $expected =
            array( 'Wish' =>
                array(
                    'id' => 1,
                    'product_id'=>4,
                    'user_id'=>1
        ));
        $this->assertEquals($expected, $result);
    }
}