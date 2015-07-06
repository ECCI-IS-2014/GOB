<?php
App::uses('ConfigurationsController', 'Controller');

/**
 * ConfigurationsController Test Case
 *
 */
class ConfigurationsControllerTest extends ControllerTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.configuration',
		'app.station',
		'app.manualdatalog',
		'app.sensor',
		'app.feature',
		'app.data_type',
		'app.automaticdatalog',
		'app.valuesdatatype',
		'app.data_type',
		'app.config'
	);

/**
 * testIndex method
 *
 * @return void
 */
    public function testIndex() {
        $this->testAction('/configurations/index');
        $this->assertInternalType('array', $this->vars['configurations']);
    }

    /**
     * testView method
     *
     * @return void
     */
    public function testView() {
        $this->testAction('/configurations/view/1');
        $this->assertInternalType('array', $this->vars['configuration']);
    }

}
