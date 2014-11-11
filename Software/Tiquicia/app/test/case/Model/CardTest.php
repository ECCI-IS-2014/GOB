<?php
App::uses('Card', 'Model');

class CardTest extends CakeTestCase {
    public $fixtures = array('app.card');
    public function setUp() {
        parent::setUp();
        $this->Card = ClassRegistry::init('Card');
    }

    public function testGetAllCards() {
        $result = $this->Card->getAllCards();
        $expected = array(
            array('Card' => array('id' => '1',
                'user_id' => '1',
                'number' => '4032938475612340',
                'sec_code' => '340',
                'expire_date' => '2016-12-22',
                'type' => 'MasterCard')),

            array('Card' => array('id' => '2',
                'user_id' => '12',
                'number' => '4032934475612240',
                'sec_code' => '240',
                'expire_date' => '2018-10-22',
                'type' => 'Visa')),

            array('Card' => array('id' => '3',
                'user_id' => '11',
                'number' => '4032938235612370',
                'sec_code' => '370',
                'expire_date' => '2017-10-10',
                'type' => 'AmericanExpress'))
        );

        $this->assertEquals($expected, $result);
    }


    public function testGetSingleCard() {
        $result = $this->Card->getSingleCard(1);
        $expected = array(
            'Card' => array('id' => '1',
                'user_id' => '1',
                'number' => '4032938475612340',
                'sec_code' => '340',
                'expire_date' => '2016-12-22',
                'type' => 'MasterCard')
        );
        $this->assertEquals($expected, $result);
    }



    public function testAddCard() {
        $cardData = array(
            'id' => '4',
            'user_id' => '4',
            'number' => '4032938475612780',
            'sec_code' => '780',
            'expire_date' => '2016-10-25',
            'type' => 'MasterCard'
        );

        $numRecordsBefore = $this->Card->find('count');
        $result = $this->Card->addCard($cardData);
        $numRecordsAfter = $this->Card->find('count');

        $expected = array(
            'Card' => array(
                'id' => '4',
                'user_id' => '4',
                'number' => '4032938475612780',
                'sec_code' => '780',
                'expire_date' => '2016-10-25',
                'type' => 'MasterCard'
            )
        );

        $this->assertEquals(4, $numRecordsAfter);
        $this->assertTrue($numRecordsBefore != $numRecordsAfter);
        $this->assertEquals($expected, $result);
    }



    public function testEditCard() {
        $this->Card->id = '3';
        $cardData = array(
            'id' => '3',
            'user_id' => '4',
            'number' => '4032938475612780',
            'sec_code' => '780',
            'expire_date' => '2016-10-25',
            'type' => 'Visa'
        );
        $recordBeforeEdit = $this->Card->read();
        $numRecordsBefore = $this->Card->find('count');
        $result = $this->Card->editCard($cardData);
        $numRecordsAfter = $this->Card->find('count');

        $expected = array(
            'Card' => array(
                'id' => '3',
                'user_id' => '4',
                'number' => '4032938475612780',
                'sec_code' => '780',
                'expire_date' => '2016-10-25',
                'type' => 'Visa'
            )
        );

        $this->assertEquals($expected, $result);
        $this->assertTrue($numRecordsBefore == $numRecordsAfter);

        $recordCompare = array_diff($recordBeforeEdit['Card'], $result['Card']);
        $expectedArrayDiffResult = array(

            'user_id' => '11',
            'number' => '4032938235612370',
            'sec_code' => '370',
            'expire_date' => '2017-10-10',
            'type' => 'AmericanExpress'
        );

        $this->assertEquals($expectedArrayDiffResult, $recordCompare);
    }




}