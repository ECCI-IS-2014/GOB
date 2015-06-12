<?php
/**
 * AutomaticdatalogFixture
 *
 */
class AutomaticdatalogFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'station_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'recolection_date' => array('type' => 'datetime', 'null' => false, 'default' => null),
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
			'id' => '4',
			'station_id' => '2',
			'recolection_date' => '2015-02-21 11:30:00'
		),
		array(
			'id' => '5',
			'station_id' => '2',
			'recolection_date' => '2015-02-21 12:00:00'
		),
		array(
			'id' => '6',
			'station_id' => '2',
			'recolection_date' => '2015-02-21 12:30:00'
		),
		array(
			'id' => '7',
			'station_id' => '2',
			'recolection_date' => '2015-02-21 13:00:00'
		),
		array(
			'id' => '8',
			'station_id' => '2',
			'recolection_date' => '2015-02-21 13:30:00'
		),
		array(
			'id' => '9',
			'station_id' => '2',
			'recolection_date' => '2015-02-21 14:00:00'
		),
		array(
			'id' => '10',
			'station_id' => '2',
			'recolection_date' => '2015-02-21 14:30:00'
		),
		array(
			'id' => '11',
			'station_id' => '2',
			'recolection_date' => '2015-02-21 15:00:00'
		),
		array(
			'id' => '12',
			'station_id' => '2',
			'recolection_date' => '2015-02-21 15:30:00'
		),
		array(
			'id' => '13',
			'station_id' => '2',
			'recolection_date' => '2015-02-21 16:00:00'
		),
	);

}
