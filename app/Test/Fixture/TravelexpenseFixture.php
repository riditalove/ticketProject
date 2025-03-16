<?php
/**
 * Travelexpense Fixture
 */
class TravelexpenseFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true, 'key' => 'primary'),
		'traveller_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true),
		'submit_date' => array('type' => 'date', 'null' => false, 'default' => null),
		'expense_type' => array('type' => 'tinyinteger', 'null' => false, 'default' => null, 'length' => 3, 'unsigned' => true),
		'description' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 400, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'payment_method' => array('type' => 'tinyinteger', 'null' => false, 'default' => null, 'length' => 3, 'unsigned' => true),
		'currency' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'amount_spent' => array('type' => 'float', 'null' => false, 'default' => null, 'unsigned' => false),
		'budget_amount' => array('type' => 'float', 'null' => false, 'default' => null, 'unsigned' => false),
		'reimbursable' => array('type' => 'boolean', 'null' => false, 'default' => null),
		'status' => array('type' => 'boolean', 'null' => false, 'default' => null),
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
			'traveller_id' => 1,
			'submit_date' => '2025-03-16',
			'expense_type' => 1,
			'description' => 'Lorem ipsum dolor sit amet',
			'payment_method' => 1,
			'currency' => 1,
			'amount_spent' => 1,
			'budget_amount' => 1,
			'reimbursable' => 1,
			'status' => 1,
			'entry_by' => 1,
			'edit_by' => 1,
			'created' => 1742119574,
			'modified' => 1742119574
		),
	);

}
