<?php
/**
 * Sample Fixture
 */
class SampleFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'style_name' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'kpifactory_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true),
		'techfile_rcv_from' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 120, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'techfile_rcv_date' => array('type' => 'date', 'null' => false, 'default' => null),
		'fabric_code' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 30, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'fabric_order_date' => array('type' => 'date', 'null' => true, 'default' => null),
		'fabric_rcv_date' => array('type' => 'date', 'null' => true, 'default' => null),
		'fabric_lead_time' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 30, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'trims_order_date' => array('type' => 'date', 'null' => true, 'default' => null),
		'trims_rcv_date' => array('type' => 'date', 'null' => true, 'default' => null),
		'trims_lead_time' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 30, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'embellish_sending_date' => array('type' => 'date', 'null' => true, 'default' => null),
		'embellish_rcv_date' => array('type' => 'date', 'null' => true, 'default' => null),
		'embellish_lead_time' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 30, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'sample_sewing_date' => array('type' => 'date', 'null' => true, 'default' => null),
		'sample_rcv_date' => array('type' => 'date', 'null' => true, 'default' => null),
		'sample_lead_time' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 30, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'final_sample_sewing_date' => array('type' => 'date', 'null' => true, 'default' => null),
		'final_sample_rcv_date' => array('type' => 'date', 'null' => true, 'default' => null),
		'final_sample_lead_time' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 30, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'wash_sending_date' => array('type' => 'date', 'null' => true, 'default' => null),
		'wash_rcv_date' => array('type' => 'date', 'null' => true, 'default' => null),
		'wash_lead_time' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 30, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'sending_for_finishing_date' => array('type' => 'date', 'null' => true, 'default' => null),
		'rcv_from_finishing_date' => array('type' => 'date', 'null' => true, 'default' => null),
		'actual_samle_sending_date' => array('type' => 'date', 'null' => true, 'default' => null),
		'dhl' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 30, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'total_lead_time' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 30, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'remarks' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'entry_by' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true),
		'edit_by' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true),
		'status' => array('type' => 'tinyinteger', 'null' => false, 'default' => null, 'length' => 3, 'unsigned' => false),
		'created' => array('type' => 'timestamp', 'null' => true, 'default' => null),
		'modified' => array('type' => 'timestamp', 'null' => true, 'default' => null),
		'approved_by' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true),
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
			'style_name' => 'Lorem ipsum dolor sit amet',
			'kpifactory_id' => 1,
			'techfile_rcv_from' => 'Lorem ipsum dolor sit amet',
			'techfile_rcv_date' => '2024-07-07',
			'fabric_code' => 'Lorem ipsum dolor sit amet',
			'fabric_order_date' => '2024-07-07',
			'fabric_rcv_date' => '2024-07-07',
			'fabric_lead_time' => 'Lorem ipsum dolor sit amet',
			'trims_order_date' => '2024-07-07',
			'trims_rcv_date' => '2024-07-07',
			'trims_lead_time' => 'Lorem ipsum dolor sit amet',
			'embellish_sending_date' => '2024-07-07',
			'embellish_rcv_date' => '2024-07-07',
			'embellish_lead_time' => 'Lorem ipsum dolor sit amet',
			'sample_sewing_date' => '2024-07-07',
			'sample_rcv_date' => '2024-07-07',
			'sample_lead_time' => 'Lorem ipsum dolor sit amet',
			'final_sample_sewing_date' => '2024-07-07',
			'final_sample_rcv_date' => '2024-07-07',
			'final_sample_lead_time' => 'Lorem ipsum dolor sit amet',
			'wash_sending_date' => '2024-07-07',
			'wash_rcv_date' => '2024-07-07',
			'wash_lead_time' => 'Lorem ipsum dolor sit amet',
			'sending_for_finishing_date' => '2024-07-07',
			'rcv_from_finishing_date' => '2024-07-07',
			'actual_samle_sending_date' => '2024-07-07',
			'dhl' => 'Lorem ipsum dolor sit amet',
			'total_lead_time' => 'Lorem ipsum dolor sit amet',
			'remarks' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'entry_by' => 1,
			'edit_by' => 1,
			'status' => 1,
			'created' => 1720330305,
			'modified' => 1720330305,
			'approved_by' => 1
		),
	);

}
