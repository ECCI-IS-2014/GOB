<?php
/**
 * ConfigFixture
 *
 */
class ConfigFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'data_type_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'csv_columns' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'habilitado' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'configuration_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => '1',
			'data_type_id' => '1',
			'csv_columns' => '4',
			'habilitado' => '1',
			'configuration_id' => '1'
		),
		array(
			'id' => '2',
			'data_type_id' => '2',
			'csv_columns' => '5',
			'habilitado' => '1',
			'configuration_id' => '1'
		),
		array(
			'id' => '3',
			'data_type_id' => '3',
			'csv_columns' => '6',
			'habilitado' => '1',
			'configuration_id' => '1'
		),
		array(
			'id' => '4',
			'data_type_id' => '4',
			'csv_columns' => '7',
			'habilitado' => '0',
			'configuration_id' => '1'
		),
		array(
			'id' => '5',
			'data_type_id' => '5',
			'csv_columns' => '8',
			'habilitado' => '1',
			'configuration_id' => '1'
		),
	);

}
