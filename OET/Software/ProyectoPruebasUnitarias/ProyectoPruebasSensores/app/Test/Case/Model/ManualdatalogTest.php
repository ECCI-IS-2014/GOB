<?php
App::uses('Manualdatalog', 'Model');

/**
 * Manualdatalog Test Case
 *
 */
class ManualdatalogTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.manualdatalog',
		'app.data_type',
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
		$this->Manualdatalog = ClassRegistry::init('Manualdatalog');
	}

        public function testGetAllManualdatalogs() {

        $result = $this->Manualdatalog->getAllManualdatalogs();
        debug($result);
        $expected = array(
	(int) 0 => array(
		'Manualdatalog' => array(
			'id' => '1',
			'data_type_id' => '1',
			'data_' => '3',
			'sensor_id' => '1',
			'station_id' => '1'
		)
	)
);

        $this->assertEquals($expected, $result);
      }


    public function testGetManualdatalogsFiltrados(){
        $result = $this->Manualdatalog->getManualdatalogsFiltrados(1);
        debug($result);
        $expected =
            array(
	'Manualdatalog' => array(
		'id' => '1',
		'data_type_id' => '1',
		'data_' => '3',
		'sensor_id' => '1',
		'station_id' => '1'
	)
);
        $this->assertEquals($expected, $result);
    }  
}
