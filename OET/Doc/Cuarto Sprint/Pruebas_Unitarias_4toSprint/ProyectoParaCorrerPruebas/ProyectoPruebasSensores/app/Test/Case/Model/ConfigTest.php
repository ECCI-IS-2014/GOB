<?php
App::uses('Config', 'Model');

/**
 * Config Test Case
 *
 */
class ConfigTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.config',
		'app.data_type',
		'app.sensor',
		'app.station',
		'app.configuration',
		'app.manualdatalog',
		'app.automaticdatalog',
		'app.valuesdatatype',
		'app.data_type',
		'app.feature'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Config = ClassRegistry::init('Config');
	}

    public function testGetAllConfig()
    {

        $result = $this->Config->getAllConfig();


        $expected = array(
            (int) 0 => array(
                'Config' => array(
                    'id' => '1',
                    'data_type_id' => '1',
                    'csv_columns' => '4',
                    'habilitado' => '1',
                    'configuration_id' => '1'
                ),
                'DataType' => array(
                    'Id' => '1',
                    'Name' => 'Temp_C_Avg',
                    'Sensor_id' => '1',
                    'Temporality' => '',
                    'Id_Data_Type' => '12'
                ),
                'Configuration' => array(
                    'id' => '1',
                    'station_id' => '1'
                )
            ),
            (int) 1 => array(
                'Config' => array(
                    'id' => '2',
                    'data_type_id' => '2',
                    'csv_columns' => '5',
                    'habilitado' => '1',
                    'configuration_id' => '1'
                ),
                'DataType' => array(
                    'Id' => '2',
                    'Name' => 'Temp_C_Max',
                    'Sensor_id' => '1',
                    'Temporality' => '',
                    'Id_Data_Type' => '13'
                ),
                'Configuration' => array(
                    'id' => '1',
                    'station_id' => '1'
                )
            ),
            (int) 2 => array(
                'Config' => array(
                    'id' => '3',
                    'data_type_id' => '3',
                    'csv_columns' => '6',
                    'habilitado' => '1',
                    'configuration_id' => '1'
                ),
                'DataType' => array(
                    'Id' => '3',
                    'Name' => 'Temp_C_TMx',
                    'Sensor_id' => '1',
                    'Temporality' => '',
                    'Id_Data_Type' => '14'
                ),
                'Configuration' => array(
                    'id' => '1',
                    'station_id' => '1'
                )
            ),
            (int) 3 => array(
                'Config' => array(
                    'id' => '4',
                    'data_type_id' => '4',
                    'csv_columns' => '7',
                    'habilitado' => '0',
                    'configuration_id' => '1'
                ),
                'DataType' => array(
                    'Id' => '4',
                    'Name' => 'AirTemp_C_Min',
                    'Sensor_id' => '1',
                    'Temporality' => '',
                    'Id_Data_Type' => '15'
                ),
                'Configuration' => array(
                    'id' => '1',
                    'station_id' => '1'
                )
            ),
            (int) 4 => array(
                'Config' => array(
                    'id' => '5',
                    'data_type_id' => '5',
                    'csv_columns' => '8',
                    'habilitado' => '1',
                    'configuration_id' => '1'
                ),
                'DataType' => array(
                    'Id' => '5',
                    'Name' => 'AirTemp_C_TMn',
                    'Sensor_id' => '1',
                    'Temporality' => '',
                    'Id_Data_Type' => '16'
                ),
                'Configuration' => array(
                    'id' => '1',
                    'station_id' => '1'
                )
            )
        );

        $this->assertEquals($expected, $result);
    }


    public function testGetConfigFiltrados(){
        $result = $this->Config->getConfigFiltrados(4);

        $expected = array(
            'Config' => array(
                'id' => '4',
                'data_type_id' => '4',
                'csv_columns' => '7',
                'habilitado' => '0',
                'configuration_id' => '1'
            ),
            'DataType' => array(
                'Id' => '4',
                'Name' => 'AirTemp_C_Min',
                'Sensor_id' => '1',
                'Temporality' => '',
                'Id_Data_Type' => '15'
            ),
            'Configuration' => array(
                'id' => '1',
                'station_id' => '1'
            )
        );
        $this->assertEquals($expected, $result);
    }

}
