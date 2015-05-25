<?php
App::uses('Feature', 'Model');

/**
 * Feature Test Case
 *
 */
class FeatureTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.feature',
		'app.sensor',
		'app.station',
		'app.manualdatalog'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Feature = ClassRegistry::init('Feature');
	}

        public function testGetAllFeatures() {

        $result = $this->Feature->getAllFeatures();
        debug($result);
        $expected = array(
	(int) 0 => array(
		'Feature' => array(
			'id' => '1',
			'name' => 'Temperatura',
			'sensor_id' => '1'
		)
	)
);

        $this->assertEquals($expected, $result);
      }


    public function testGetFeaturesFiltrados(){
        $result = $this->Feature->getFeaturesFiltrados(1);
        debug($result);
        $expected =
            array(
	'Feature' => array(
		'id' => '1',
		'name' => 'Temperatura',
		'sensor_id' => '1'
	)
);
        $this->assertEquals($expected, $result);
    }  
}