<?php
App::uses('AutomaticdatalogsController', 'Controller');

/**
 * AutomaticdatalogsController Test Case
 *
 */
class AutomaticdatalogsControllerTest extends ControllerTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.automaticdatalog',
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
        $this->testAction('/automaticdatalogs/index');
        $this->assertInternalType('array', $this->vars['automaticdatalogs']);
    }

    /**
     * testView method
     *
     * @return void
     */
    public function testView() {
        $this->testAction('/automaticdatalogs/index');
        $this->assertInternalType('array', $this->vars['automaticdatalogs']);
    }


}
