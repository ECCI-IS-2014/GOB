<?php
/**
 * SensorFixture
 *
 */
class SensorFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'key' => 'primary'),
		'serial' => array('type' => 'string', 'null' => true),
		'price' => array('type' => 'integer', 'null' => true),
		'type_' => array('type' => 'string', 'null' => true),
		'model_' => array('type' => 'string', 'null' => true),
		'installation_date' => array('type' => 'date', 'null' => true),
		'removal_date' => array('type' => 'date', 'null' => true),
		'calibration_date' => array('type' => 'date', 'null' => true),
		'brand' => array('type' => 'string', 'null' => true),
		'description' => array('type' => 'string', 'null' => true),
		'provider' => array('type' => 'string', 'null' => true),
		'coordinate_x' => array('type' => 'float', 'null' => true),
		'coordinate_y' => array('type' => 'integer', 'null' => true),
		'station_id' => array('type' => 'integer', 'null' => true),
		'ID_SENSOR' => array('type' => 'integer', 'null' => true),
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => '1',
			'serial' => 'rj45',
			'price' => '8978',
			'type_' => 'Temperatura',
			'model_' => 'M-SRT',
			'installation_date' => '2015-05-12',
			'removal_date' => '2015-05-31',
			'calibration_date' => '2015-05-29',
			'brand' => 'campbell',
			'description' => 'campbell',
			'provider' => 'campbell case',
			'coordinate_x' => null,
			'coordinate_y' => null,
			'station_id' => null,
			'ID_SENSOR' => '23'
		),
		array(
			'id' => '3',
			'serial' => 'Rafa500',
			'price' => '123456',
			'type_' => 'humedad',
			'model_' => 'M-SRTHH',
			'installation_date' => '2015-05-25',
			'removal_date' => '2015-05-25',
			'calibration_date' => '2015-05-25',
			'brand' => 'campbell',
			'description' => 'campbell',
			'provider' => 'campbell case',
			'coordinate_x' => null,
			'coordinate_y' => null,
			'station_id' => '1',
			'ID_SENSOR' => '5'
		),
	);

}
