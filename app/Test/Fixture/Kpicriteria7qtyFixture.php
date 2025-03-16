<?php
/**
 * Kpicriteria7qty Fixture
 */
class Kpicriteria7qtyFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'tinyinteger', 'null' => false, 'default' => null, 'length' => 3, 'unsigned' => true, 'key' => 'primary'),
		'type' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'percentage_from' => array('type' => 'tinyinteger', 'null' => false, 'default' => null, 'unsigned' => false),
		'percentage_to' => array('type' => 'tinyinteger', 'null' => false, 'default' => null, 'unsigned' => false),
		'points' => array('type' => 'tinyinteger', 'null' => false, 'default' => null, 'unsigned' => false),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'type' => 'Lorem ipsum dolor sit ame',
			'percentage_from' => 1,
			'percentage_to' => 1,
			'points' => 1
		),
	);

}
