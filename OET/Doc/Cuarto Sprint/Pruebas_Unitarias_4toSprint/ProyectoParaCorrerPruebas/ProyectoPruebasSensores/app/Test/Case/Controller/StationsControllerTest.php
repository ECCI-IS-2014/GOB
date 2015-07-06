<?php
App::uses('StationsController', 'Controller');

/**
 * StationsController Test Case
 *
 */
class StationsControllerTest extends ControllerTestCase {

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
 * testIndex method
 *
 * @return void
 */
	public function testIndex() {
            $this->testAction('/stations/index');
            $this->assertInternalType('array', $this->vars['stations']);
	}

/**
 * testView method
 *
 * @return void
 */
	public function testView() {
		$this->testAction('/stations/view/1');
                
                $this->assertInternalType('array', $this->vars['station']);
	}

}
