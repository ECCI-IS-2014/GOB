<?php
App::uses('Sensor', 'Model');

/**
 * Sensor Test Case
 *
 */
class SensorTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.sensor',
		'app.station',
		'app.manualdatalog',
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
		$this->Sensor = ClassRegistry::init('Sensor');
	}


	
        
        public function testGetAllSensors() {

        $result = $this->Sensor->getAllSensors();
        debug($result);
        $expected = array(
	(int) 0 => array(
		'Sensor' => array(
			'id' => '1',
			'serial' => 'rj45',
			'type_' => 'Temperatura',
			'model_' => 'M-SRT',
			'station_id' => null
		),
		'Feature' => array(
			(int) 0 => array(
				'id' => '1',
				'name' => 'Temperatura',
				'sensor_id' => '1',
				'ID_FEATURE' => '1'
			)
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
		)
	),
	(int) 1 => array(
		'Sensor' => array(
			'id' => '3',
			'serial' => 'Rafa500',
			'type_' => 'humedad',
			'model_' => 'M-SRTHH',
			'station_id' => '1'
		),
		'Feature' => array(),
		'Manualdatalog' => array()
	)
);

        $this->assertEquals($expected, $result);
      }


    public function testGetSensorsFiltrados(){
        $result = $this->Sensor->getSensorsFiltrados(1);
        //debug($result);
        $expected =
            array(
	'Sensor' => array(
		'id' => '1',
		'serial' => 'rj45',
		'type_' => 'Temperatura',
		'model_' => 'M-SRT',
		'station_id' => null
	),
	'Feature' => array(
		(int) 0 => array(
			'id' => '1',
			'name' => 'Temperatura',
			'sensor_id' => '1',
			'ID_FEATURE' => '1'
		)
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
	)
);
        $this->assertEquals($expected, $result);
    }  

}