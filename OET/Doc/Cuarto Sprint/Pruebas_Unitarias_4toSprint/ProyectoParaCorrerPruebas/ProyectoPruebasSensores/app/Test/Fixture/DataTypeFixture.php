<?php
/**
 * DataTypeFixture
 *
 */
class DataTypeFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'Id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'Name' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'Sensor_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'Temporality' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'Id_Data_Type' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'indexes' => array(
			'PRIMARY' => array('column' => 'Id', 'unique' => 1)
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
			'Id' => '1',
			'Name' => 'Temp_C_Avg',
			'Sensor_id' => '1',
			'Temporality' => '',
			'Id_Data_Type' => '12'
		),
		array(
			'Id' => '2',
			'Name' => 'Temp_C_Max',
			'Sensor_id' => '1',
			'Temporality' => '',
			'Id_Data_Type' => '13'
		),
		array(
			'Id' => '3',
			'Name' => 'Temp_C_TMx',
			'Sensor_id' => '1',
			'Temporality' => '',
			'Id_Data_Type' => '14'
		),
		array(
			'Id' => '4',
			'Name' => 'AirTemp_C_Min',
			'Sensor_id' => '1',
			'Temporality' => '',
			'Id_Data_Type' => '15'
		),
		array(
			'Id' => '5',
			'Name' => 'AirTemp_C_TMn',
			'Sensor_id' => '1',
			'Temporality' => '',
			'Id_Data_Type' => '16'
		),
		array(
			'Id' => '6',
			'Name' => 'RH_percent',
			'Sensor_id' => '1',
			'Temporality' => '',
			'Id_Data_Type' => '17'
		),
		array(
			'Id' => '7',
			'Name' => 'Rain_mm_Tot',
			'Sensor_id' => '21',
			'Temporality' => '',
			'Id_Data_Type' => '18'
		),
	);

}
