<?php
/**
 * FooduserFixture
 *
 */
class FooduserFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true, 'key' => 'primary'),
		'user_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 10, 'unsigned' => true),
		'period' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 7, 'collate' => 'utf8_bin', 'charset' => 'utf8'),
		'regular' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 5, 'unsigned' => true),
		'continental' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 5, 'unsigned' => true),
		'dessert' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 5, 'unsigned' => true),
		'snacks' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 5, 'unsigned' => true),
		'status' => array('type' => 'boolean', 'null' => false, 'default' => null),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'entry_by' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'edit_by' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_bin', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'user_id' => 1,
			'period' => 'Lorem',
			'regular' => 1,
			'continental' => 1,
			'dessert' => 1,
			'snacks' => 1,
			'status' => 1,
			'created' => '2018-11-28 23:26:00',
			'entry_by' => 1,
			'modified' => '2018-11-28 23:26:00',
			'edit_by' => 1
		),
	);

}
