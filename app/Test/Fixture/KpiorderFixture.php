<?php
/**
 * Kpiorder Fixture
 */
class KpiorderFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true, 'key' => 'primary'),
		'kpioffice_id' => array('type' => 'tinyinteger', 'null' => false, 'default' => null, 'length' => 3, 'unsigned' => true),
		'kpibuyer_id' => array('type' => 'smallinteger', 'null' => false, 'default' => null, 'length' => 5, 'unsigned' => true),
		'sample_reference' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'kpifactory_id' => array('type' => 'smallinteger', 'null' => false, 'default' => null, 'length' => 5, 'unsigned' => true),
		'manager' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true),
		'merchandiser' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true),
		'qa' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true),
		'kpidepartment_id' => array('type' => 'tinyinteger', 'null' => false, 'default' => null, 'length' => 3, 'unsigned' => true),
		'kpiproduct_id' => array('type' => 'smallinteger', 'null' => false, 'default' => null, 'length' => 5, 'unsigned' => true),
		'style_number' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'order_number' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'order_date' => array('type' => 'date', 'null' => false, 'default' => null),
		'order_quantity' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true),
		'order_rate' => array('type' => 'decimal', 'null' => false, 'default' => null, 'length' => '10,4', 'unsigned' => false),
		'factory_rate' => array('type' => 'decimal', 'null' => false, 'default' => null, 'length' => '10,4', 'unsigned' => false),
		'po_etd_date' => array('type' => 'date', 'null' => false, 'default' => null),
		'revised_etd_date' => array('type' => 'date', 'null' => false, 'default' => null),
		'reason_of_change' => array('type' => 'string', 'null' => false, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'pp_meeting_date' => array('type' => 'date', 'null' => false, 'default' => null),
		'type_a' => array('type' => 'tinyinteger', 'null' => false, 'default' => null, 'length' => 3, 'unsigned' => true),
		'type_b' => array('type' => 'tinyinteger', 'null' => false, 'default' => null, 'length' => 3, 'unsigned' => true),
		'type_c' => array('type' => 'tinyinteger', 'null' => false, 'default' => null, 'length' => 3, 'unsigned' => true),
		'type_d' => array('type' => 'tinyinteger', 'null' => false, 'default' => null, 'length' => 3, 'unsigned' => true),
		'type_e' => array('type' => 'tinyinteger', 'null' => false, 'default' => null, 'length' => 3, 'unsigned' => true),
		'pfri_date' => array('type' => 'date', 'null' => false, 'default' => null),
		'fri_date' => array('type' => 'date', 'null' => false, 'default' => null),
		'total_pfri' => array('type' => 'tinyinteger', 'null' => false, 'default' => null, 'length' => 3, 'unsigned' => true),
		'total_fri' => array('type' => 'tinyinteger', 'null' => false, 'default' => null, 'length' => 3, 'unsigned' => true),
		'reason_of_pfri' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'reason_of_fri' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'shipped_quantity' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true),
		'shipment_mode' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'payment_by' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'result' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'entry_by' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true),
		'edit_by' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 10, 'unsigned' => true),
		'status' => array('type' => 'boolean', 'null' => false, 'default' => null),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
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
			'kpioffice_id' => 1,
			'kpibuyer_id' => 1,
			'sample_reference' => 'Lorem ipsum dolor sit amet',
			'kpifactory_id' => 1,
			'manager' => 1,
			'merchandiser' => 1,
			'qa' => 1,
			'kpidepartment_id' => 1,
			'kpiproduct_id' => 1,
			'style_number' => 'Lorem ipsum dolor sit amet',
			'order_number' => 'Lorem ipsum dolor sit amet',
			'order_date' => '2023-11-13',
			'order_quantity' => 1,
			'order_rate' => '',
			'factory_rate' => '',
			'po_etd_date' => '2023-11-13',
			'revised_etd_date' => '2023-11-13',
			'reason_of_change' => 'Lorem ipsum dolor sit amet',
			'pp_meeting_date' => '2023-11-13',
			'type_a' => 1,
			'type_b' => 1,
			'type_c' => 1,
			'type_d' => 1,
			'type_e' => 1,
			'pfri_date' => '2023-11-13',
			'fri_date' => '2023-11-13',
			'total_pfri' => 1,
			'total_fri' => 1,
			'reason_of_pfri' => 'Lorem ipsum dolor sit amet',
			'reason_of_fri' => 'Lorem ipsum dolor sit amet',
			'shipped_quantity' => 1,
			'shipment_mode' => 'Lorem ipsum dolor sit amet',
			'payment_by' => 'Lorem ipsum dolor sit amet',
			'result' => 'Lorem ipsum dolor sit amet',
			'entry_by' => 1,
			'edit_by' => 1,
			'status' => 1,
			'created' => '2023-11-13 18:02:37',
			'modified' => '2023-11-13 18:02:37'
		),
	);

}
