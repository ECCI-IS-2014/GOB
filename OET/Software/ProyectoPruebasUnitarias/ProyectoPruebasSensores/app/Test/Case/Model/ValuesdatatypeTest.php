<?php
App::uses('Valuesdatatype', 'Model');

/**
 * Valuesdatatype Test Case
 *
 */
class ValuesdatatypeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.valuesdatatype',
		'app.automaticdatalog',
		'app.station',
		'app.manualdatalog',
		'app.sensor',
		'app.feature',
		'app.data_type'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Valuesdatatype = ClassRegistry::init('Valuesdatatype');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Valuesdatatype);

		parent::tearDown();
	}

}
