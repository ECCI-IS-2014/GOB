<?php
App::uses('Configuration', 'Model');

/**
 * Configuration Test Case
 *
 */
class ConfigurationTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.configuration',
		'app.station',
		'app.manualdatalog',
		'app.sensor',
		'app.feature',
		'app.data_type',
		'app.automaticdatalog',
		'app.valuesdatatype',
		'app.data_type',
		'app.config'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Configuration = ClassRegistry::init('Configuration');
	}

    public function testGetAllConfiguration()
    {

        $result = $this->Configuration->getAllConfiguration();


        $expected = array(
            (int) 0 => array(
                'Configuration' => array(
                    'id' => '1',
                    'station_id' => '1'
                ),
                'Station' => array(
                    'id' => '1',
                    'station' => '1',
                    'description' => 'Palo Verde'
                ),
                'Config' => array(
                    (int) 0 => array(
                        'id' => '1',
                        'data_type_id' => '1',
                        'csv_columns' => '4',
                        'habilitado' => '1',
                        'configuration_id' => '1'
                    ),
                    (int) 1 => array(
                        'id' => '2',
                        'data_type_id' => '2',
                        'csv_columns' => '5',
                        'habilitado' => '1',
                        'configuration_id' => '1'
                    ),
                    (int) 2 => array(
                        'id' => '3',
                        'data_type_id' => '3',
                        'csv_columns' => '6',
                        'habilitado' => '1',
                        'configuration_id' => '1'
                    ),
                    (int) 3 => array(
                        'id' => '4',
                        'data_type_id' => '4',
                        'csv_columns' => '7',
                        'habilitado' => '0',
                        'configuration_id' => '1'
                    ),
                    (int) 4 => array(
                        'id' => '5',
                        'data_type_id' => '5',
                        'csv_columns' => '8',
                        'habilitado' => '1',
                        'configuration_id' => '1'
                    )
                )
            )
        );

        $this->assertEquals($expected, $result);
    }

    public function testGetConfigurationFiltrados(){
        $result = $this->Configuration->getConfigurationFiltrados(1);
        $expected = array(
            'Configuration' => array(
                'id' => '1',
                'station_id' => '1'
            ),
            'Station' => array(
                'id' => '1',
                'station' => '1',
                'description' => 'Palo Verde'
            ),
            'Config' => array(
                (int) 0 => array(
                    'id' => '1',
                    'data_type_id' => '1',
                    'csv_columns' => '4',
                    'habilitado' => '1',
                    'configuration_id' => '1'
                ),
                (int) 1 => array(
                    'id' => '2',
                    'data_type_id' => '2',
                    'csv_columns' => '5',
                    'habilitado' => '1',
                    'configuration_id' => '1'
                ),
                (int) 2 => array(
                    'id' => '3',
                    'data_type_id' => '3',
                    'csv_columns' => '6',
                    'habilitado' => '1',
                    'configuration_id' => '1'
                ),
                (int) 3 => array(
                    'id' => '4',
                    'data_type_id' => '4',
                    'csv_columns' => '7',
                    'habilitado' => '0',
                    'configuration_id' => '1'
                ),
                (int) 4 => array(
                    'id' => '5',
                    'data_type_id' => '5',
                    'csv_columns' => '8',
                    'habilitado' => '1',
                    'configuration_id' => '1'
                )
            )
        );
        $this->assertEquals($expected, $result);
    }

}
