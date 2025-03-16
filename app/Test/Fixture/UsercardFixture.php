<?php
/**
 * UsercardFixture
 *
 */
class UsercardFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true, 'key' => 'primary'),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true),
		'issue_date' => array('type' => 'date', 'null' => false, 'default' => null),
		'valid_date' => array('type' => 'date', 'null' => false, 'default' => null),
		'pcard_number' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 30, 'collate' => 'utf8_bin', 'charset' => 'utf8'),
		'card_number' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 30, 'collate' => 'utf8_bin', 'charset' => 'utf8'),
		'entry_by' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true, 'comment' => 'user_id'),
		'status' => array('type' => 'boolean', 'null' => false, 'default' => null),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => null),
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
			'issue_date' => '2018-10-23',
			'valid_date' => '2018-10-23',
			'pcard_number' => 'Lorem ipsum dolor sit amet',
			'card_number' => 'Lorem ipsum dolor sit amet',
			'entry_by' => 1,
			'status' => 1,
			'created' => '2018-10-23 06:55:10',
			'modified' => '2018-10-23 06:55:10'
		),
	);

}
