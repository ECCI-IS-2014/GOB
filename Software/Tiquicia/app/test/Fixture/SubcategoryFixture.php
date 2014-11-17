<?php
class SubcategoryFixture extends CakeTestFixture {

    // Optional.
    // Set this property to load fixtures to a different test datasource
    public $useDbConfig = 'test';
    public $fields = array(
        'subcategory_id'=> array('type' => 'integer', 'null' =>true),
        'id' => array('type' => 'integer', 'key' => 'primary'),
        'name' => array('type' => 'string', 'length' => 16, 'null' => false)
    );
    public $records = array(
        array(
            'id' => '1',
            'name' => 'Futbol'
        ),
        array(
            'subcategory_id'=>'2',
            'id' => '2',
            'name' => 'Basket'
        ),
        array(
            'subcategory_id'=>'3',
            'id' => '3',
            'name' => 'Volleybol'
        )
    );
}