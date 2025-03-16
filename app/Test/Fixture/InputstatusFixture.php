<?php
/**
 * Inputstatus Fixture
 */
class InputstatusFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true, 'key' => 'primary'),
		'preproduction_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true),
		'plan_input_date' => array('type' => 'date', 'null' => false, 'default' => null),
		'actual_input_date' => array('type' => 'date', 'null' => false, 'default' => null),
		'sewing_line_allocation' => array('type' => 'float', 'null' => false, 'default' => null, 'unsigned' => false),
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
			'plan_input_date' => '2024-05-06',
			'actual_input_date' => '2024-05-06',
			'sewing_line_allocation' => 1,
			'action_date' => '2024-05-06',
			'status' => 1,
			'apv_by' => 1,
			'apv_date' => '2024-05-06',
			'entry_by' => 1,
			'edit_by' => 1,
			'created' => 1714988605,
			'modified' => 1714988605
		),
	);

}
