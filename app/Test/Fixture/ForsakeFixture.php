<?php
/**
 * ForsakeFixture
 *
 */
class ForsakeFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true, 'key' => 'primary'),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true),
		'companyleave_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true),
		'days' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 3, 'unsigned' => true),
		'apply_date' => array('type' => 'date', 'null' => false, 'default' => null),
		'start_date' => array('type' => 'date', 'null' => false, 'default' => null),
		'end_date' => array('type' => 'date', 'null' => false, 'default' => null),
		'comment_recommend' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 500, 'collate' => 'utf8_bin', 'charset' => 'utf8'),
		'comment_approve' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 500, 'collate' => 'utf8_bin', 'charset' => 'utf8'),
		'recommended_by' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true, 'comment' => 'user_id'),
		'approved_by' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true, 'comment' => 'user_id'),
		'status' => array('type' => 'boolean', 'null' => false, 'default' => null),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
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
			'companyleave_id' => 1,
			'days' => 1,
			'apply_date' => '2018-10-23',
			'start_date' => '2018-10-23',
			'end_date' => '2018-10-23',
			'comment_recommend' => 'Lorem ipsum dolor sit amet',
			'comment_approve' => 'Lorem ipsum dolor sit amet',
			'recommended_by' => 1,
			'approved_by' => 1,
			'status' => 1,
			'created' => '2018-10-23 06:53:42',
			'modified' => '2018-10-23 06:53:42'
		),
	);

}
