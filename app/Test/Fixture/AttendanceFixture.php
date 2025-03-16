<?php
/**
 * AttendanceFixture
 *
 */
class AttendanceFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true, 'key' => 'primary'),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true),
		'card' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 30, 'collate' => 'utf8_bin', 'charset' => 'utf8'),
		'in_time' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'out_time' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'a_date' => array('type' => 'date', 'null' => false, 'default' => null),
		'entry_by' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true, 'comment' => 'user_id'),
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
			'card' => 'Lorem ipsum dolor sit amet',
			'in_time' => '2018-10-23 06:48:41',
			'out_time' => '2018-10-23 06:48:41',
			'a_date' => '2018-10-23',
			'entry_by' => 1
		),
	);

}
