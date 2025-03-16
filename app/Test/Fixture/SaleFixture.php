<?php
/**
 * SaleFixture
 *
 */
class SaleFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true, 'key' => 'primary'),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true),
		'approverid' => array('type' => 'integer', 'null' => true, 'default' => '0', 'length' => 10, 'unsigned' => true),
		'customer_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true),
		'section_id' => array('type' => 'integer', 'null' => true, 'default' => '0', 'length' => 10, 'unsigned' => true),
		'challan_no' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'utf8_bin', 'charset' => 'utf8'),
		'sale_date' => array('type' => 'date', 'null' => false, 'default' => null),
		'truck_no' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'utf8_bin', 'charset' => 'utf8'),
		'driver_name' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_bin', 'charset' => 'utf8'),
		'driver_phone' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 25, 'collate' => 'utf8_bin', 'charset' => 'utf8'),
		'total' => array('type' => 'float', 'null' => false, 'default' => null, 'unsigned' => false),
		'total_qty' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 5, 'unsigned' => true),
		'remark' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'utf8_bin', 'charset' => 'utf8'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'user_date' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'app_date' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_bin', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'user_id' => 1,
			'approverid' => 1,
			'customer_id' => 1,
			'section_id' => 1,
			'challan_no' => 'Lorem ipsum dolor sit amet',
			'sale_date' => '2018-03-05',
			'truck_no' => 'Lorem ipsum dolor ',
			'driver_name' => 'Lorem ipsum dolor sit amet',
			'driver_phone' => 'Lorem ipsum dolor sit a',
			'total' => 1,
			'total_qty' => 1,
			'remark' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2018-03-05 06:35:01',
			'user_date' => '2018-03-05 06:35:01',
			'app_date' => '2018-03-05 06:35:01'
		),
	);

}
