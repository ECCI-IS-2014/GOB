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
		'app.manualdatalog'
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

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Manualdatalog);

		parent::tearDown();
	}

}
