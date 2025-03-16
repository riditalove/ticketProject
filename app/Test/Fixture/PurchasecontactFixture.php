<?php
/**
 * Purchasecontact Fixture
 */
class PurchasecontactFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true, 'key' => 'primary'),
		'contact_no' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 120, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'contract_date' => array('type' => 'date', 'null' => false, 'default' => null),
		'applicant_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true),
		'notify' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'consignee' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'applicant_bank' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'kpifactory_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true),
		'factory_bank' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'transhipment' => array('type' => 'boolean', 'null' => false, 'default' => null),
		'part_shipment' => array('type' => 'boolean', 'null' => false, 'default' => null),
		'po_information' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 400, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'delivery_terms' => array('type' => 'tinyinteger', 'null' => false, 'default' => null, 'length' => 3, 'unsigned' => true),
		'payment_terms' => array('type' => 'tinyinteger', 'null' => false, 'default' => null, 'length' => 3, 'unsigned' => true),
		'tolerance' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'shipment_date' => array('type' => 'date', 'null' => false, 'default' => null),
		'expiry_date' => array('type' => 'date', 'null' => false, 'default' => null),
		'port_of_loading' => array('type' => 'tinyinteger', 'null' => false, 'default' => null, 'length' => 3, 'unsigned' => true),
		'port_of_discharge' => array('type' => 'tinyinteger', 'null' => false, 'default' => null, 'length' => 3, 'unsigned' => true),
		'documents_require' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 400, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'special_instruction' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 400, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'status' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
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
			'contact_no' => 'Lorem ipsum dolor sit amet',
			'contract_date' => '2025-02-17',
			'applicant_id' => 1,
			'notify' => 'Lorem ipsum dolor sit amet',
			'consignee' => 'Lorem ipsum dolor sit amet',
			'applicant_bank' => 'Lorem ipsum dolor sit amet',
			'kpifactory_id' => 1,
			'factory_bank' => 'Lorem ipsum dolor sit amet',
			'transhipment' => 1,
			'part_shipment' => 1,
			'po_information' => 'Lorem ipsum dolor sit amet',
			'delivery_terms' => 1,
			'payment_terms' => 1,
			'tolerance' => 'Lorem ipsum dolor sit amet',
			'shipment_date' => '2025-02-17',
			'expiry_date' => '2025-02-17',
			'port_of_loading' => 1,
			'port_of_discharge' => 1,
			'documents_require' => 'Lorem ipsum dolor sit amet',
			'special_instruction' => 'Lorem ipsum dolor sit amet',
			'status' => 1,
			'entry_by' => 1,
			'edit_by' => 1,
			'created' => 1739790864,
			'modified' => 1739790864
		),
	);

}
