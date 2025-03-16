<?php
/**
 * UseraccountFixture
 *
 */
class UseraccountFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true, 'key' => 'primary'),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true),
		'salary' => array('type' => 'float', 'null' => false, 'default' => null, 'unsigned' => true),
		'bonus' => array('type' => 'float', 'null' => false, 'default' => null, 'unsigned' => true),
		'festival_bonus' => array('type' => 'float', 'null' => false, 'default' => null, 'unsigned' => true),
		'holiday_bonus' => array('type' => 'float', 'null' => false, 'default' => null, 'unsigned' => false),
		'entry_by' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 10, 'unsigned' => true, 'comment' => 'user_id'),
		'edit_by' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 10, 'unsigned' => true, 'comment' => 'user_id'),
		'status' => array('type' => 'boolean', 'null' => false, 'default' => null),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
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
			'salary' => 1,
			'bonus' => 1,
			'festival_bonus' => 1,
			'holiday_bonus' => 1,
			'entry_by' => 1,
			'edit_by' => 1,
			'status' => 1,
			'created' => '2018-10-30 07:48:09',
			'modified' => '2018-10-30 07:48:09'
		),
	);

}
