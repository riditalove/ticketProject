<?php
/**
 * Department Fixture
 */
class DepartmentFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'smallinteger', 'null' => false, 'default' => null, 'length' => 5, 'unsigned' => true, 'key' => 'primary'),
		'company_id' => array('type' => 'tinyinteger', 'null' => false, 'default' => null, 'length' => 3, 'unsigned' => true),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8mb4_unicode_ci', 'charset' => 'utf8mb4'),
		'code' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 5, 'collate' => 'utf8mb4_unicode_ci', 'charset' => 'utf8mb4'),
		'description' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'utf8mb4_unicode_ci', 'charset' => 'utf8mb4'),
		'color_code' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 30, 'collate' => 'utf8mb4_unicode_ci', 'charset' => 'utf8mb4'),
		'level' => array('type' => 'smallinteger', 'null' => false, 'default' => null, 'length' => 5, 'unsigned' => true),
		'status' => array('type' => 'boolean', 'null' => false, 'default' => null),
		'in_graph' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 1, 'collate' => 'utf8mb4_unicode_ci', 'charset' => 'utf8mb4'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'entry_by' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true, 'comment' => 'user_id'),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'edit_by' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 10, 'unsigned' => true, 'comment' => 'user_id'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8mb4', 'collate' => 'utf8mb4_unicode_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'company_id' => 1,
			'name' => 'Lorem ipsum dolor sit amet',
			'code' => 'Lor',
			'description' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'color_code' => 'Lorem ipsum dolor sit amet',
			'level' => 1,
			'status' => 1,
			'in_graph' => 'Lorem ipsum dolor sit ame',
			'created' => '2023-11-13 17:35:24',
			'entry_by' => 1,
			'modified' => '2023-11-13 17:35:24',
			'edit_by' => 1
		),
	);

}
