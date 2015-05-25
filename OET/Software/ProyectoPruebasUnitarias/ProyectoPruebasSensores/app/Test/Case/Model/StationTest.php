<?php
App::uses('Station', 'Model');

/**
 * Station Test Case
 *
 */
class StationTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.station',
		'app.manualdatalog',
		'app.sensor',
		'app.feature'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Station = ClassRegistry::init('Station');
	}

        public function testGetAllStations() {

        $result = $this->Station->getAllStations();
        debug($result);
        $expected = array(
	(int) 0 => array(
		'Station' => array(
			'id' => '1',
			'station' => '1',
			'description' => 'Palo Verde'
		),
		'Manualdatalog' => array(
			(int) 0 => array(
				'id' => '1',
				'data_type_id' => '1',
				'recolection_date' => '2015-05-25',
				'data_' => '3',
				'sensor_id' => '1',
				'datalog' => '45',
				'station_id' => '1',
				'ID_MANUALDATALOGS' => '12'
			)
		),
		'Sensor' => array(
			(int) 0 => array(
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
			)
		)
	)
);

        $this->assertEquals($expected, $result);
      }


    public function testGetStationsFiltrados(){
        $result = $this->Station->getStationsFiltrados(1);
        debug($result);
        $expected =
            array(
	'Station' => array(
		'id' => '1',
		'station' => '1',
		'description' => 'Palo Verde'
	),
	'Manualdatalog' => array(
		(int) 0 => array(
			'id' => '1',
			'data_type_id' => '1',
			'recolection_date' => '2015-05-25',
			'data_' => '3',
			'sensor_id' => '1',
			'datalog' => '45',
			'station_id' => '1',
			'ID_MANUALDATALOGS' => '12'
		)
	),
	'Sensor' => array(
		(int) 0 => array(
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
		)
	)
);
        $this->assertEquals($expected, $result);
    }  

}
