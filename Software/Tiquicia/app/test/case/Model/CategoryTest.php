<?php
App::uses('Category', 'Model');

class CategoryTest extends CakeTestCase {
    public $fixtures = array('app.category');
    public function setUp() {
        parent::setUp();
        $this->Category = ClassRegistry::init('Category');
    }


    public function testAddCategory() {
        $categoryData = array(
            'id' => '4',
            'name' => 'Nueva'

        );

        $numRecordsBefore = $this->Category->find('count');
        $result = $this->Category->addCategory($categoryData);
        $numRecordsAfter = $this->Category->find('count');

        $expected = array(
            'Category' => array(
                'id' => '4',
                'name' => 'Nueva'
            )
        );

        $this->assertEquals(4, $numRecordsAfter);
        $this->assertTrue($numRecordsBefore != $numRecordsAfter);
        $this->assertEquals($expected, $result);
    }



}