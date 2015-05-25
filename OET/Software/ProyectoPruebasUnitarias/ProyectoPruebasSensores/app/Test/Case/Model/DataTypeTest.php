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
		'app.feature'
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
			'id' => '1',
			'data_type' => '3',
			'description' => 'Maximo',
			'temporality' => 'Mucha'
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
		'id' => '1',
		'data_type' => '3',
		'description' => 'Maximo',
		'temporality' => 'Mucha'
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
