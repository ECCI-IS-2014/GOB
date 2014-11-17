<?php
App::uses('Subcategory', 'Model');

class SubcategoryTest extends CakeTestCase {
    public $fixtures = array('app.subcategory');
    public function setUp() {
        parent::setUp();
        $this->Subcategory = ClassRegistry::init('Subcategory');
    }


    public function testAddSubcategory() {
        $subcategoryData = array(
            'id' => '4',
            'name' => 'Nueva'

        );

        $numRecordsBefore = $this->Subcategory->find('count');
        $result = $this->Subcategory->addSubcategory($subcategoryData);
        $numRecordsAfter = $this->Subcategory->find('count');

        $expected = array(
            'Subcategory' => array(
                'id' => '4',
                'name' => 'Nueva'
            )
        );

        $this->assertEquals(4, $numRecordsAfter);
        $this->assertTrue($numRecordsBefore != $numRecordsAfter);
        $this->assertEquals($expected, $result);
    }



}