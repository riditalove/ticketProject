<?php
/**
 * Realization Fixture
 */
class RealizationFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true, 'key' => 'primary'),
		'Position' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'Lookup_code' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'JOB' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'BUYER' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'EXPORT_LC_NUMBER' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'PO' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'STYLE' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'INVOICE_NUMBER' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'PO_CRD' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'ACTUAL_SHIPMENT_DATE' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'ACTUAL_SHIPMENT_MONTH' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'PAYMENT_TERMS' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'PAYMENT_LEAD_TIME' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'EXPECTED_REALIZATION_DATE' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'MONTH_OF_RELIZED' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'PO_QTY' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'SHIPMENT_QTY' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'FOB_VALUE_PC' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'TTL _FOB_VALUE' => array('type' => 'string', 'null' => true, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'COMMISSION_DISCOUNT' => array('type' => 'smallinteger', 'null' => true, 'default' => null, 'length' => 255, 'unsigned' => true),
		'RETENTION_FEE_DISCOUNT' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'NET_INVOICE_VALUE' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'Maturity_Date' => array('type' => 'string', 'null' => true, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'empty' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'BTB' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'PURCHASE_DATE' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'REMARK' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'empty2' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'REMARK2' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'BUYER_c' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'EXPORT_LC_NUMBER_c' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'PO_c' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'STYLE_c' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'INVOICE_NUMBER_c' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'PO_CRD_c' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'ACTUAL_SHIPMENT_DATE_c' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'PO_QTY_c' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'SHIPMENT_QTY_c' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'FOB_VALUE_PC_c' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'entry_by' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 10, 'unsigned' => true, 'comment' => 'user_id'),
		'edit_by' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 10, 'unsigned' => true, 'comment' => 'user_id'),
		'status' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
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
			'Position' => 'Lorem ipsum dolor sit amet',
			'Lookup_code' => 'Lorem ipsum dolor sit amet',
			'JOB' => 'Lorem ipsum dolor sit amet',
			'BUYER' => 'Lorem ipsum dolor sit amet',
			'EXPORT_LC_NUMBER' => 'Lorem ipsum dolor sit amet',
			'PO' => 'Lorem ipsum dolor sit amet',
			'STYLE' => 'Lorem ipsum dolor sit amet',
			'INVOICE_NUMBER' => 'Lorem ipsum dolor sit amet',
			'PO_CRD' => 'Lorem ipsum dolor sit amet',
			'ACTUAL_SHIPMENT_DATE' => 'Lorem ipsum dolor sit amet',
			'ACTUAL_SHIPMENT_MONTH' => 'Lorem ipsum dolor sit amet',
			'PAYMENT_TERMS' => 'Lorem ipsum dolor sit amet',
			'PAYMENT_LEAD_TIME' => 'Lorem ipsum dolor sit amet',
			'EXPECTED_REALIZATION_DATE' => 'Lorem ipsum dolor sit amet',
			'MONTH_OF_RELIZED' => 'Lorem ipsum dolor sit amet',
			'PO_QTY' => 'Lorem ipsum dolor sit amet',
			'SHIPMENT_QTY' => 'Lorem ipsum dolor sit amet',
			'FOB_VALUE_PC' => 'Lorem ipsum dolor sit amet',
			'TTL _FOB_VALUE' => 'Lorem ipsum dolor sit amet',
			'COMMISSION_DISCOUNT' => 1,
			'RETENTION_FEE_DISCOUNT' => 'Lorem ipsum dolor sit amet',
			'NET_INVOICE_VALUE' => 'Lorem ipsum dolor sit amet',
			'Maturity_Date' => 'Lorem ipsum dolor sit amet',
			'empty' => 'Lorem ipsum dolor sit amet',
			'BTB' => 'Lorem ipsum dolor sit amet',
			'PURCHASE_DATE' => 'Lorem ipsum dolor sit amet',
			'REMARK' => 'Lorem ipsum dolor sit amet',
			'empty2' => 'Lorem ipsum dolor sit amet',
			'REMARK2' => 'Lorem ipsum dolor sit amet',
			'BUYER_c' => 'Lorem ipsum dolor sit amet',
			'EXPORT_LC_NUMBER_c' => 'Lorem ipsum dolor sit amet',
			'PO_c' => 'Lorem ipsum dolor sit amet',
			'STYLE_c' => 'Lorem ipsum dolor sit amet',
			'INVOICE_NUMBER_c' => 'Lorem ipsum dolor sit amet',
			'PO_CRD_c' => 'Lorem ipsum dolor sit amet',
			'ACTUAL_SHIPMENT_DATE_c' => 'Lorem ipsum dolor sit amet',
			'PO_QTY_c' => 'Lorem ipsum dolor sit amet',
			'SHIPMENT_QTY_c' => 'Lorem ipsum dolor sit amet',
			'FOB_VALUE_PC_c' => 'Lorem ipsum dolor sit amet',
			'entry_by' => 1,
			'edit_by' => 1,
			'status' => 'Lorem ipsum dolor sit ame',
			'created' => '2022-06-27 15:27:15',
			'modified' => '2022-06-27 15:27:15'
		),
	);

}
