<?php
App::uses('DataTypesController', 'Controller');

/**
 * DataTypesController Test Case
 *
 */
class DataTypesControllerTest extends ControllerTestCase {

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
 * testIndex method
 *
 * @return void
 */
	public function testIndex() {
            $this->testAction('/dataTypes/index');
            $this->assertInternalType('array', $this->vars['dataTypes']);
	}

/**
 * testView method
 *
 * @return void
 */
	public function testView() {
        $this->testAction('/dataTypes/index');
        $this->assertInternalType('array', $this->vars['dataTypes']);
	}


}
