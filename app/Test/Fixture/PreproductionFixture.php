<?php
/**
 * Preproduction Fixture
 */
class PreproductionFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true, 'key' => 'primary'),
		'kpifactory_id' => array('type' => 'smallinteger', 'null' => false, 'default' => null, 'length' => 5, 'unsigned' => true),
		'kpidepartment_id' => array('type' => 'tinyinteger', 'null' => false, 'default' => null, 'length' => 3, 'unsigned' => true),
		'style_number' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'article_number' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 120, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'po_number' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'po_receive_date' => array('type' => 'date', 'null' => true, 'default' => null),
		'po_passto_commercial' => array('type' => 'date', 'null' => true, 'default' => null),
		'color' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 120, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'order_quantity' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true),
		'po_etd_date' => array('type' => 'date', 'null' => false, 'default' => null),
		'revised_etd_date' => array('type' => 'date', 'null' => true, 'default' => null),
		'merchandiser' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true),
		'manager' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true),
		'qa' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true),
		'qa_manager' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true),
		'entry_by' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true),
		'edit_by' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 10, 'unsigned' => true),
		'status' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
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
			'kpifactory_id' => 1,
			'kpidepartment_id' => 1,
			'style_number' => 'Lorem ipsum dolor sit amet',
			'article_number' => 'Lorem ipsum dolor sit amet',
			'po_number' => 'Lorem ipsum dolor sit amet',
			'po_receive_date' => '2024-05-06',
			'po_passto_commercial' => '2024-05-06',
			'color' => 'Lorem ipsum dolor sit amet',
			'order_quantity' => 1,
			'po_etd_date' => '2024-05-06',
			'revised_etd_date' => '2024-05-06',
			'merchandiser' => 1,
			'manager' => 1,
			'qa' => 1,
			'qa_manager' => 1,
			'entry_by' => 1,
			'edit_by' => 1,
			'status' => 'Lorem ipsum dolor sit ame',
			'created' => '2024-05-06 15:42:46',
			'modified' => '2024-05-06 15:42:46'
		),
	);

}
