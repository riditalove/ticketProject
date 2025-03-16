<?php
/**
 * Kpicriteria6fri Fixture
 */
class Kpicriteria6friFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'tinyinteger', 'null' => false, 'default' => null, 'length' => 3, 'unsigned' => true, 'key' => 'primary'),
		'kpibuyertype_id' => array('type' => 'tinyinteger', 'null' => false, 'default' => null, 'length' => 3, 'unsigned' => true),
		'days_from' => array('type' => 'tinyinteger', 'null' => false, 'default' => null, 'unsigned' => false),
		'days_to' => array('type' => 'tinyinteger', 'null' => false, 'default' => null, 'unsigned' => false),
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
			'kpibuyertype_id' => 1,
			'days_from' => 1,
			'days_to' => 1,
			'points' => 1
		),
	);

}
