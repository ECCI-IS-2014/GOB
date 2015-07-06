<?php
App::uses('SensorsController', 'Controller');

/**
 * SensorsController Test Case
 *
 */
class SensorsControllerTest extends ControllerTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.sensor',
		'app.station',
		'app.manualdatalog',
		'app.data_type',
		'app.feature'
	);

/**
 * testIndex method
 *
 * @return void
 */
        public function testIndex() {
            $this->testAction('/sensors/index');

            $this->assertInternalType('array', $this->vars['sensors']);

        }

/**
 * testView method
 *
 * @return void
 */
 public function testView() {


        $this->testAction('/sensors/view/1');

        $this->assertInternalType('array', $this->vars['sensor']);

 }
/**
 * testAdd method
 *
 * @return void
 */



}
