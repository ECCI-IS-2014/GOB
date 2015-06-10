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
			'recolection_date' => '2015-05-25',
			'station_id' => '1',
			'temp' => '5',
			'mintemp' => '5',
			'maxtemp' => '5',
			'relative_humidity' => '10',
			'barometric_pressure' => '50',
			'rainfall' => '25',
			'recolector' => 'juan',
			'comments' => 'bien',
			'ID_MANUALDATALOGS' => '12',
			'insertion_date' => '2015-06-09'
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
						'recolection_date' => '2015-05-25',
						'station_id' => '1',
						'temp' => '5',
						'mintemp' => '5',
						'maxtemp' => '5',
						'relative_humidity' => '10',
						'barometric_pressure' => '50',
						'rainfall' => '25',
						'recolector' => 'juan',
						'comments' => 'bien',
						'ID_MANUALDATALOGS' => '12',
						'insertion_date' => '2015-06-09'
				)
				
			);
        $this->assertEquals($expected, $result);
    }
	public function testAddManualdatalog() {
		$manualdata = array(
						'id' => '2',
						'recolection_date' => '2016-06-26',
						'station_id' => '1',
						'temp' => '7',
						'mintemp' => '7',
						'maxtemp' => '7',
						'relative_humidity' => '20',
						'barometric_pressure' => '60',
						'rainfall' => '26',
						'recolector' => 'pedro',
						'comments' => 'muybien',
						'ID_MANUALDATALOGS' => '13',
						'insertion_date' => '2015-06-10'
				
		);
		
		$numRecordsBefore = $this->Manualdatalog->find('count');
		debug($manualdata);
		$result = $this->Manualdatalog->addManualdatalog($manualdata);
		$numRecordsAfter = $this->Manualdatalog->find('count');

		$expected = array(
			'Manualdatalog' => array(
						'id' => '2',
						'recolection_date' => '2016-06-26',
						'station_id' => '1',
						'temp' => '7',
						'mintemp' => '7',
						'maxtemp' => '7',
						'relative_humidity' => '20',
						'barometric_pressure' => '60',
						'rainfall' => '26',
						'recolector' => 'pedro',
						'comments' => 'muybien',
						'ID_MANUALDATALOGS' => '13',
						'insertion_date' => '2015-06-10'
			)
		
		);
		$this->assertEquals(2, $numRecordsAfter);
		$this->assertTrue($numRecordsBefore != $numRecordsAfter);
		$this->assertEquals($expected, $result);
    }
	public function testDeleteManualdatalog() {
		$manualdata = array(
						'id' => '1',
						'recolection_date' => '2015-05-25',
						'station_id' => '1',
						'temp' => '5',
						'mintemp' => '5',
						'maxtemp' => '5',
						'relative_humidity' => '10',
						'barometric_pressure' => '50',
						'rainfall' => '25',
						'recolector' => 'juan',
						'comments' => 'bien',
						'ID_MANUALDATALOGS' => '12',
						'insertion_date' => '2015-06-09'
			
		);
        $numRecordsBefore = $this->Manualdatalog->find('count');
        $this->Manualdatalog->deleteManualdatalog($manualdata);
        $numRecordsAfter = $this->Manualdatalog->find('count');
        $this->assertEquals(0, $numRecordsAfter);
        $this->assertTrue($numRecordsBefore != $numRecordsAfter);
    }
	
	
}
