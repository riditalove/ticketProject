<?php
/**
 * Washstatus Fixture
 */
class WashstatusFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true, 'key' => 'primary'),
		'preproduction_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true),
		'laundry_name' => array('type' => 'float', 'null' => false, 'default' => null, 'unsigned' => false),
		'wash_sent_plan' => array('type' => 'float', 'null' => false, 'default' => null, 'unsigned' => false),
		'actual_wash_sent' => array('type' => 'float', 'null' => false, 'default' => null, 'unsigned' => false),
		'wash_rcv_plan' => array('type' => 'float', 'null' => false, 'default' => null, 'unsigned' => false),
		'actual_wash_rcv' => array('type' => 'float', 'null' => false, 'default' => null, 'unsigned' => false),
		'action_date' => array('type' => 'date', 'null' => false, 'default' => null),
		'status' => array('type' => 'tinyinteger', 'null' => false, 'default' => null, 'length' => 3, 'unsigned' => false),
		'apv_by' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true),
		'apv_date' => array('type' => 'date', 'null' => false, 'default' => null),
		'entry_by' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true),
		'edit_by' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true),
		'created' => array('type' => 'timestamp', 'null' => true, 'default' => null),
		'modified' => array('type' => 'timestamp', 'null' => true, 'default' => null),
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
			'preproduction_id' => 1,
			'laundry_name' => 1,
			'wash_sent_plan' => 1,
			'actual_wash_sent' => 1,
			'wash_rcv_plan' => 1,
			'actual_wash_rcv' => 1,
			'action_date' => '2024-05-06',
			'status' => 1,
			'apv_by' => 1,
			'apv_date' => '2024-05-06',
			'entry_by' => 1,
			'edit_by' => 1,
			'created' => 1714988702,
			'modified' => 1714988702
		),
	);

}
