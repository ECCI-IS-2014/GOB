<?php
App::uses('ConfigsController', 'Controller');

/**
 * ConfigsController Test Case
 *
 */
class ConfigsControllerTest extends ControllerTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.config',
		'app.data_type',
		'app.sensor',
		'app.station',
		'app.configuration',
		'app.manualdatalog',
		'app.automaticdatalog',
		'app.valuesdatatype',
		'app.data_type',
		'app.feature'
	);

/**
 * testIndex method
 *
 * @return void
 */
    public function testIndex() {
        $this->testAction('/configs/index');
        $this->assertInternalType('array', $this->vars['configs']);
    }

    /**
     * testView method
     *
     * @return void
     */
    public function testView() {
        $this->testAction('/configs/view/1');
        $this->assertInternalType('array', $this->vars['config']);
    }
}
