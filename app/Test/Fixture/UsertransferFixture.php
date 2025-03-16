<?php
/**
 * UsertransferFixture
 *
 */
class UsertransferFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true, 'key' => 'primary'),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true),
		'company_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 3, 'unsigned' => true),
		'department_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 5, 'unsigned' => true),
		'section_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 5, 'unsigned' => true),
		'designation_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 5, 'unsigned' => true),
		'previous_company_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 3, 'unsigned' => true),
		'previous_department_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 5, 'unsigned' => true),
		'previous_section_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 5, 'unsigned' => true),
		'previous_designation_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 5, 'unsigned' => true),
		'transfer_date' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'expire_date' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'remarks' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'utf8_bin', 'charset' => 'utf8'),
		'transfer_reason' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_bin', 'charset' => 'utf8'),
		'entry_by' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true),
		'edit_by' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 10, 'unsigned' => true),
		'status' => array('type' => 'boolean', 'null' => false, 'default' => null),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
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
			'company_id' => 1,
			'department_id' => 1,
			'section_id' => 1,
			'designation_id' => 1,
			'previous_company_id' => 1,
			'previous_department_id' => 1,
			'previous_section_id' => 1,
			'previous_designation_id' => 1,
			'transfer_date' => '2019-01-12 10:55:04',
			'expire_date' => '2019-01-12 10:55:04',
			'remarks' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'transfer_reason' => 'Lorem ipsum dolor sit amet',
			'entry_by' => 1,
			'edit_by' => 1,
			'status' => 1,
			'created' => '2019-01-12 10:55:04',
			'modified' => '2019-01-12 10:55:04'
		),
	);

}
