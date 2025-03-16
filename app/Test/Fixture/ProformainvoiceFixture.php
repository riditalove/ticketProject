<?php
/**
 * Proformainvoice Fixture
 */
class ProformainvoiceFixture extends CakeTestFixture {

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
		'applicant_address' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'kpifactory_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true),
		'factorybank_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true),
		'indesorebank_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true),
		'transhipment' => array('type' => 'boolean', 'null' => false, 'default' => null),
		'part_shipment' => array('type' => 'boolean', 'null' => false, 'default' => null),
		'po_information' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 400, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'delivery_term' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'payment_term' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'tolerance' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'shipment_date' => array('type' => 'date', 'null' => false, 'default' => null),
		'expiry_date' => array('type' => 'date', 'null' => false, 'default' => null),
		'port_of_loading' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'port_of_discharge' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
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
			'contract_date' => '2025-02-27',
			'applicant_id' => 1,
			'applicant_address' => 'Lorem ipsum dolor sit amet',
			'kpifactory_id' => 1,
			'factorybank_id' => 1,
			'indesorebank_id' => 1,
			'transhipment' => 1,
			'part_shipment' => 1,
			'po_information' => 'Lorem ipsum dolor sit amet',
			'delivery_term' => 'Lorem ipsum dolor sit amet',
			'payment_term' => 'Lorem ipsum dolor sit amet',
			'tolerance' => 'Lorem ipsum dolor sit amet',
			'shipment_date' => '2025-02-27',
			'expiry_date' => '2025-02-27',
			'port_of_loading' => 'Lorem ipsum dolor sit amet',
			'port_of_discharge' => 'Lorem ipsum dolor sit amet',
			'status' => 1,
			'entry_by' => 1,
			'edit_by' => 1,
			'created' => 1740650307,
			'modified' => 1740650307
		),
	);

}
