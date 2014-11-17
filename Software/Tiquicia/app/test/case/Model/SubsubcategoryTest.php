<?php
App::uses('Subsubcategory', 'Model');

class SubsubcategoryTest extends CakeTestCase {
    public $fixtures = array('app.subsubcategory');
    public function setUp() {
        parent::setUp();
        $this->Subsubcategory = ClassRegistry::init('Subsubcategory');
    }


    public function testAddSubsubcategory() {
        $subsubcategoryData = array(
            'id' => '4',
            'name' => 'Nueva'

        );

        $numRecordsBefore = $this->Subsubcategory->find('count');
        $result = $this->Subsubcategory->addSubsubcategory($subsubcategoryData);
        $numRecordsAfter = $this->Subsubcategory->find('count');

        $expected = array(
            'Subsubcategory' => array(
                'id' => '4',
                'name' => 'Nueva'
            )
        );

        $this->assertEquals(4, $numRecordsAfter);
        $this->assertTrue($numRecordsBefore != $numRecordsAfter);
        $this->assertEquals($expected, $result);
    }



}