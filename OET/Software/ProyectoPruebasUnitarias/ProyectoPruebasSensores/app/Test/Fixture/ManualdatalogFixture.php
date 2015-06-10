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
		'recolection_date' => array('type' => 'date', 'null' => true, 'default' => null),
		'station_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'temp' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'mintemp' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'maxtemp' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'relative_humidity' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'barometric_pressure' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'rainfall' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'recolector' => array('type' => 'string', 'null' => true, 'default' => null,'length' => 50),
		'comments' => array('type' => 'string', 'null' => true, 'default' => null,'length' => 250),
		'ID_MANUALDATALOGS' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'insertion_date' => array('type' => 'date', 'null' => true, 'default' => null),
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
			'recolection_date' => '2015-05-25',
			'station_id' => '1',
			'temp' => '5',
			'mintemp' => '5',
			'maxtemp' => '5',
			'relative_humidity' => '10',
			'barometric_pressure' => '50',
			'rainfall' => '25',
			'recolector' => 'juan',
			'comments' => 'bien',
			'ID_MANUALDATALOGS' => '12',
			'insertion_date' => '2015-06-09'
		),
	);

}
