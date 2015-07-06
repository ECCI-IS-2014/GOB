<?php
/**
 * ValuesdatatypeFixture
 *
 */
class ValuesdatatypeFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'Id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'Data_type_Id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'Automaticdatalog_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'Data_value' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'Id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
	);

}
