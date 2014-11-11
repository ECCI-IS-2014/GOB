<?php
class CardFixture extends CakeTestFixture {

    // Optional.
    // Set this property to load fixtures to a different test datasource
    public $useDbConfig = 'test';
    public $fields = array(
        'id' => array('type' => 'integer', 'key' => 'primary'),
        'user_id' => array('type' => 'integer', 'length' => 11, 'null' => false),
        'number' => array('type' => 'string', 'length' => 16, 'null' => false),
        'sec_code' => array('type' => 'integer', 'length' => 3, 'null' => false),
        'expire_date' => 'date',
        'type' => array('type' => 'string', 'length' => 40, 'null' => false),

    );
    public $records = array(
        array(
            'id' => '1',
            'user_id' => '1',
            'number' => '4032938475612340',
            'sec_code' => '340',
            'expire_date' => '2016-12-22',
            'type' => 'MasterCard'
        ),
        array(
            'id' => '2',
            'user_id' => '12',
            'number' => '4032934475612240',
            'sec_code' => '240',
            'expire_date' => '2018-10-22',
            'type' => 'Visa'
        ),
        array(
            'id' => '3',
            'user_id' => '11',
            'number' => '4032938235612370',
            'sec_code' => '370',
            'expire_date' => '2017-10-10',
            'type' => 'AmericanExpress'
        )
    );
}