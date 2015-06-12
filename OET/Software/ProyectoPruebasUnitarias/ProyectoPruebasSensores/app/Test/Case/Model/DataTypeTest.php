<?php
App::uses('DataType', 'Model');

/**
 * DataType Test Case
 *
 */
class DataTypeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.data_type',
		'app.manualdatalog',
		'app.sensor',
		'app.station',
		'app.feature',
        //'app.valuesdatatypes'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->DataType = ClassRegistry::init('DataType');
	}

        public function testGetAllDataTypes() {

        $result = $this->DataType->getAllDataTypes();
        debug($result);
        $expected = array(
            (int) 0 => array(
                'DataType' => array(
                    'Id' => '1',
                    'Name' => 'Temp_C_Avg',
                    'Sensor_id' => '1',
                    'Temporality' => '',
                    'Id_Data_Type' => '12'
                ),
                'Sensor' => array(
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
                )
            ),
            (int) 1 => array(
                'DataType' => array(
                    'Id' => '2',
                    'Name' => 'Temp_C_Max',
                    'Sensor_id' => '1',
                    'Temporality' => '',
                    'Id_Data_Type' => '13'
                ),
                'Sensor' => array(
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
                )
            ),
            (int) 2 => array(
                'DataType' => array(
                    'Id' => '3',
                    'Name' => 'Temp_C_TMx',
                    'Sensor_id' => '1',
                    'Temporality' => '',
                    'Id_Data_Type' => '14'
                ),
                'Sensor' => array(
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
                )
            ),
            (int) 3 => array(
                'DataType' => array(
                    'Id' => '4',
                    'Name' => 'AirTemp_C_Min',
                    'Sensor_id' => '1',
                    'Temporality' => '',
                    'Id_Data_Type' => '15'
                ),
                'Sensor' => array(
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
                )
            ),
            (int) 4 => array(
                'DataType' => array(
                    'Id' => '5',
                    'Name' => 'AirTemp_C_TMn',
                    'Sensor_id' => '1',
                    'Temporality' => '',
                    'Id_Data_Type' => '16'
                ),
                'Sensor' => array(
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
                )
            ),
            (int) 5 => array(
                'DataType' => array(
                    'Id' => '6',
                    'Name' => 'RH_percent',
                    'Sensor_id' => '1',
                    'Temporality' => '',
                    'Id_Data_Type' => '17'
                ),
                'Sensor' => array(
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
                )
            ),
            (int) 6 => array(
                'DataType' => array(
                    'Id' => '7',
                    'Name' => 'Rain_mm_Tot',
                    'Sensor_id' => '21',
                    'Temporality' => '',
                    'Id_Data_Type' => '18'
                ),
                'Sensor' => array(
                    'id' => null,
                    'serial' => null,
                    'price' => null,
                    'type_' => null,
                    'model_' => null,
                    'installation_date' => null,
                    'removal_date' => null,
                    'calibration_date' => null,
                    'brand' => null,
                    'description' => null,
                    'provider' => null,
                    'coordinate_x' => null,
                    'coordinate_y' => null,
                    'station_id' => null,
                    'ID_SENSOR' => null
                )
            )
);

        $this->assertEquals($expected, $result);
      }


    public function testGetDataTypesFiltrados(){
        $result = $this->DataType->getDataTypesFiltrados(1);
        debug($result);
        $expected =
            array(
                'DataType' => array(
                    'Id' => '1',
                    'Name' => 'Temp_C_Avg',
                    'Sensor_id' => '1',
                    'Temporality' => '',
                    'Id_Data_Type' => '12'
                ),
                'Sensor' => array(
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
                )
            );
        $this->assertEquals($expected, $result);
    }  

}
