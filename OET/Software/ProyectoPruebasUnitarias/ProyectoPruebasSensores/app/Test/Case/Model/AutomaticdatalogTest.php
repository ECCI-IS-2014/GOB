<?php
App::uses('Automaticdatalog', 'Model');

/**
 * Automaticdatalog Test Case
 *
 */
class AutomaticdatalogTest extends CakeTestCase
{

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
        'app.feature',
        //'app.valuesdatatypes'
    );

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $this->Automaticdatalog = ClassRegistry::init('Automaticdatalog');
    }

    public function testGetAllAutomaticdatalogs() {

        $result = $this->Automaticdatalog->getAllAutomaticdatalogs();
        debug($result);
        $expected = array(
            (int) 0 => array(
                'Automaticdatalog' => array(
                    'id' => '4',
                    'station_id' => '2',
                    'recolection_date' => '2015-02-21 11:30:00'
                ),
                'Station' => array(
                    'id' => null,
                    'station' => null,
                    'description' => null
                )
            ),
            (int) 1 => array(
                'Automaticdatalog' => array(
                    'id' => '5',
                    'station_id' => '2',
                    'recolection_date' => '2015-02-21 12:00:00'
                ),
                'Station' => array(
                    'id' => null,
                    'station' => null,
                    'description' => null
                )
            ),
            (int) 2 => array(
                'Automaticdatalog' => array(
                    'id' => '6',
                    'station_id' => '2',
                    'recolection_date' => '2015-02-21 12:30:00'
                ),
                'Station' => array(
                    'id' => null,
                    'station' => null,
                    'description' => null
                )
            ),
            (int) 3 => array(
                'Automaticdatalog' => array(
                    'id' => '7',
                    'station_id' => '2',
                    'recolection_date' => '2015-02-21 13:00:00'
                ),
                'Station' => array(
                    'id' => null,
                    'station' => null,
                    'description' => null
                )
            ),
            (int) 4 => array(
                'Automaticdatalog' => array(
                    'id' => '8',
                    'station_id' => '2',
                    'recolection_date' => '2015-02-21 13:30:00'
                ),
                'Station' => array(
                    'id' => null,
                    'station' => null,
                    'description' => null
                )
            ),
            (int) 5 => array(
                'Automaticdatalog' => array(
                    'id' => '9',
                    'station_id' => '2',
                    'recolection_date' => '2015-02-21 14:00:00'
                ),
                'Station' => array(
                    'id' => null,
                    'station' => null,
                    'description' => null
                )
            ),
            (int) 6 => array(
                'Automaticdatalog' => array(
                    'id' => '10',
                    'station_id' => '2',
                    'recolection_date' => '2015-02-21 14:30:00'
                ),
                'Station' => array(
                    'id' => null,
                    'station' => null,
                    'description' => null
                )
            ),
            (int) 7 => array(
                'Automaticdatalog' => array(
                    'id' => '11',
                    'station_id' => '2',
                    'recolection_date' => '2015-02-21 15:00:00'
                ),
                'Station' => array(
                    'id' => null,
                    'station' => null,
                    'description' => null
                )
            ),
            (int) 8 => array(
                'Automaticdatalog' => array(
                    'id' => '12',
                    'station_id' => '2',
                    'recolection_date' => '2015-02-21 15:30:00'
                ),
                'Station' => array(
                    'id' => null,
                    'station' => null,
                    'description' => null
                )
            ),
            (int) 9 => array(
                'Automaticdatalog' => array(
                    'id' => '13',
                    'station_id' => '2',
                    'recolection_date' => '2015-02-21 16:00:00'
                ),
                'Station' => array(
                    'id' => null,
                    'station' => null,
                    'description' => null
                )
            )
        );

        $this->assertEquals($expected, $result);
    }


    public function testGetAutomaticdatalogsFiltrados(){
        $result = $this->Automaticdatalog->getAutomaticdatalogsFiltrados(4);
        debug($result);
        $expected =
            array(
                'Automaticdatalog' => array(
                    'id' => '4',
                    'station_id' => '2',
                    'recolection_date' => '2015-02-21 11:30:00'
                ),
                'Station' => array(
                    'id' => null,
                    'station' => null,
                    'description' => null
                )
            );
        $this->assertEquals($expected, $result);
    }
}
