<?php
App::uses('ManualdatalogsController', 'Controller');

/**
 * ManualdatalogsController Test Case
 *
 */
class ManualdatalogsControllerTest extends ControllerTestCase {

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
 * testIndex method
 *
 * @return void
 */
	public function testIndex() {
            $this->testAction('/manualdatalogs/index');
            $this->assertInternalType('array', $this->vars['manualdatalogs']);
	}

/**
 * testView method
 *
 * @return void
 */
	public function testView() {
            $this->testAction('/manualdatalogs/view/1');
            $this->assertInternalType('array', $this->vars['manualdatalog']);
	}


}
