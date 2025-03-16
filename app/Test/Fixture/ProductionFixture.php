<?php
/**
 * Production Fixture
 */
class ProductionFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true, 'key' => 'primary'),
		'date' => array('type' => 'date', 'null' => false, 'default' => null),
		'company_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true),
		'production' => array('type' => 'float', 'null' => false, 'default' => null, 'unsigned' => false),
		'income' => array('type' => 'float', 'null' => false, 'default' => null, 'unsigned' => false),
		'shipment' => array('type' => 'float', 'null' => false, 'default' => null, 'unsigned' => false),
		'shipment_proceed' => array('type' => 'float', 'null' => false, 'default' => null, 'unsigned' => false),
		'status' => array('type' => 'tinyinteger', 'null' => false, 'default' => null, 'length' => 3, 'unsigned' => false),
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
			'date' => '2024-03-18',
			'company_id' => 1,
			'production' => 1,
			'income' => 1,
			'shipment' => 1,
			'shipment_proceed' => 1,
			'status' => 1,
			'entry_by' => 1,
			'edit_by' => 1,
			'created' => 1710742749,
			'modified' => 1710742749
		),
	);

}
