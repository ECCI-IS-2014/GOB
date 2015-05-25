<?php
App::uses('FeaturesController', 'Controller');

/**
 * FeaturesController Test Case
 *
 */
class FeaturesControllerTest extends ControllerTestCase {

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
 * testIndex method
 *
 * @return void
 */
	public function testIndex() {
            $this->testAction('/features/index');
            $this->assertInternalType('array', $this->vars['features']);
	}

/**
 * testView method
 *
 * @return void
 */
	public function testView() {
            $this->testAction('/features/view/1');
            $this->assertInternalType('array', $this->vars['feature']);
	}


}
