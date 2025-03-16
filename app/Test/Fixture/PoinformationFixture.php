<?php
/**
 * Poinformation Fixture
 */
class PoinformationFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true, 'key' => 'primary'),
		'preproduction_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true),
		'file_number' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 120, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'kpibuyer_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true),
		'po_number' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'po_issue_date' => array('type' => 'date', 'null' => true, 'default' => null),
		'po_receive_date' => array('type' => 'date', 'null' => true, 'default' => null),
		'kpifactory_id' => array('type' => 'smallinteger', 'null' => false, 'default' => null, 'length' => 5, 'unsigned' => true),
		'season' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 120, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'kpidepartment_id' => array('type' => 'tinyinteger', 'null' => false, 'default' => null, 'length' => 3, 'unsigned' => true),
		'des_of_goods' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 400, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'article_number' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 120, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'order_quantity' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true),
		'fob_price' => array('type' => 'float', 'null' => false, 'default' => null, 'unsigned' => false),
		'factory_fob' => array('type' => 'float', 'null' => false, 'default' => null, 'unsigned' => false),
		'itl_commission' => array('type' => 'float', 'null' => false, 'default' => null, 'unsigned' => false),
		'shipment_mode' => array('type' => 'tinyinteger', 'null' => false, 'default' => null, 'length' => 3, 'unsigned' => true),
		'payment_term' => array('type' => 'tinyinteger', 'null' => false, 'default' => null, 'length' => 3, 'unsigned' => true),
		'country_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true),
		'goods_handover' => array('type' => 'date', 'null' => true, 'default' => null),
		'po_etd_date' => array('type' => 'date', 'null' => true, 'default' => null),
		'revised_etd_date' => array('type' => 'date', 'null' => true, 'default' => null),
		'increased_qty' => array('type' => 'float', 'null' => false, 'default' => null, 'unsigned' => false),
		'entry_by' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true),
		'edit_by' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 10, 'unsigned' => true),
		'status' => array('type' => 'tinyinteger', 'null' => false, 'default' => null, 'length' => 3, 'unsigned' => false),
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
			'preproduction_id' => 1,
			'file_number' => 'Lorem ipsum dolor sit amet',
			'kpibuyer_id' => 1,
			'po_number' => 'Lorem ipsum dolor sit amet',
			'po_issue_date' => '2025-02-05',
			'po_receive_date' => '2025-02-05',
			'kpifactory_id' => 1,
			'season' => 'Lorem ipsum dolor sit amet',
			'kpidepartment_id' => 1,
			'des_of_goods' => 'Lorem ipsum dolor sit amet',
			'article_number' => 'Lorem ipsum dolor sit amet',
			'order_quantity' => 1,
			'fob_price' => 1,
			'factory_fob' => 1,
			'itl_commission' => 1,
			'shipment_mode' => 1,
			'payment_term' => 1,
			'country_id' => 1,
			'goods_handover' => '2025-02-05',
			'po_etd_date' => '2025-02-05',
			'revised_etd_date' => '2025-02-05',
			'increased_qty' => 1,
			'entry_by' => 1,
			'edit_by' => 1,
			'status' => 1,
			'created' => '2025-02-05 17:32:21',
			'modified' => '2025-02-05 17:32:21'
		),
	);

}
