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
		'ID' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true, 'key' => 'primary'),
		'RECOLECTION_DATE' => array('type' => 'date', 'null' => true, 'default' => null),
		'STATION_ID' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'TEMP' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'MINTEMP' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'MAXTEMP' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'RELATIVE_HUMIDITY' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'BAROMETRIC_PRESSURE' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'RAINFALL' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'RECOLECTOR' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'COMMENTS' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'ID_MANUALDATALOGS' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'INSERTION_DATE' => array('type' => 'date', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'ID', 'unique' => 1)
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
			'ID' => 1,
			'RECOLECTION_DATE' => '2015-06-08',
			'STATION_ID' => 1,
			'TEMP' => 1,
			'MINTEMP' => 1,
			'MAXTEMP' => 1,
			'RELATIVE_HUMIDITY' => 1,
			'BAROMETRIC_PRESSURE' => 1,
			'RAINFALL' => 1,
			'RECOLECTOR' => 'Lorem ipsum dolor sit amet',
			'COMMENTS' => 'Lorem ipsum dolor sit amet',
			'ID_MANUALDATALOGS' => 1,
			'INSERTION_DATE' => '2015-06-08'
		),
	);

}
