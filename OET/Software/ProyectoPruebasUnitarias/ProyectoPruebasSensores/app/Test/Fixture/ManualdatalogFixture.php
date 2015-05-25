<?php
/**
 * ManualdatalogFixture
 *
 */
class ManualdatalogFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true, 'key' => 'primary'),
		'data_type_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'recolection_date' => array('type' => 'date', 'null' => true, 'default' => null),
		'data_' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'sensor_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'datalog' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'station_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'ID_MANUALDATALOGS' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_spanish_ci', 'engine' => 'InnoDB')
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
			'recolection_date' => '2015-05-25',
			'data_' => '3',
			'sensor_id' => '1',
			'datalog' => '45',
			'station_id' => '1',
			'ID_MANUALDATALOGS' => '12'
		),
	);

}
