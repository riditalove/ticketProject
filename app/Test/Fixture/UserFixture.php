<?php
/**
 * UserFixture
 *
 */
class UserFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true, 'key' => 'primary'),
		'company_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 3, 'unsigned' => true),
		'department_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 5, 'unsigned' => true),
		'section_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 5, 'unsigned' => true),
		'designation_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 3, 'unsigned' => true),
		'role_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 5, 'unsigned' => true),
		'username' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'utf8_bin', 'charset' => 'utf8'),
		'password' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'utf8_bin', 'charset' => 'utf8'),
		'corporate_id_no' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_bin', 'charset' => 'utf8'),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'utf8_bin', 'charset' => 'utf8'),
		'phone' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 25, 'collate' => 'utf8_bin', 'charset' => 'utf8'),
		'email' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'utf8_bin', 'charset' => 'utf8'),
		'gender' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 1, 'collate' => 'utf8_bin', 'charset' => 'utf8'),
		'religion' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 3, 'unsigned' => true),
		'blood_group' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 3, 'unsigned' => true),
		'marital_status' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 1, 'collate' => 'utf8_bin', 'charset' => 'utf8'),
		'father_name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'utf8_bin', 'charset' => 'utf8'),
		'mother_name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'utf8_bin', 'charset' => 'utf8'),
		'present_address' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'utf8_bin', 'charset' => 'utf8'),
		'permanent_address' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'utf8_bin', 'charset' => 'utf8'),
		'emergency_phone' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 25, 'collate' => 'utf8_bin', 'charset' => 'utf8'),
		'nid' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 20, 'collate' => 'utf8_bin', 'charset' => 'utf8'),
		'machine_card_no' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_bin', 'charset' => 'utf8'),
		'nationality' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 3, 'unsigned' => true),
		'date_of_birth' => array('type' => 'date', 'null' => false, 'default' => null),
		'join_date' => array('type' => 'date', 'null' => false, 'default' => null),
		'manager' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true, 'comment' => 'user_id'),
		'report_to' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true, 'comment' => 'user_id'),
		'balance' => array('type' => 'float', 'null' => false, 'default' => null, 'unsigned' => false),
		'paid' => array('type' => 'float', 'null' => false, 'default' => null, 'unsigned' => true),
		'advance' => array('type' => 'float', 'null' => false, 'default' => null, 'unsigned' => true),
		'salary' => array('type' => 'float', 'null' => false, 'default' => null, 'unsigned' => true),
		'bonus' => array('type' => 'float', 'null' => false, 'default' => null, 'unsigned' => true),
		'festival_bonus' => array('type' => 'float', 'null' => false, 'default' => null, 'unsigned' => true),
		'holiday_bonus' => array('type' => 'float', 'null' => false, 'default' => null, 'unsigned' => false),
		'entry_by' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true, 'comment' => 'user_id'),
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
			'company_id' => 1,
			'department_id' => 1,
			'section_id' => 1,
			'designation_id' => 1,
			'role_id' => 1,
			'username' => 'Lorem ipsum dolor sit amet',
			'password' => 'Lorem ipsum dolor sit amet',
			'corporate_id_no' => 'Lorem ipsum dolor sit amet',
			'name' => 'Lorem ipsum dolor sit amet',
			'phone' => 'Lorem ipsum dolor sit a',
			'email' => 'Lorem ipsum dolor sit amet',
			'gender' => 'Lorem ipsum dolor sit ame',
			'religion' => 1,
			'blood_group' => 1,
			'marital_status' => 'Lorem ipsum dolor sit ame',
			'father_name' => 'Lorem ipsum dolor sit amet',
			'mother_name' => 'Lorem ipsum dolor sit amet',
			'present_address' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'permanent_address' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'emergency_phone' => 'Lorem ipsum dolor sit a',
			'nid' => 'Lorem ipsum dolor ',
			'machine_card_no' => 'Lorem ip',
			'nationality' => 1,
			'date_of_birth' => '2018-10-23',
			'join_date' => '2018-10-23',
			'manager' => 1,
			'report_to' => 1,
			'balance' => 1,
			'paid' => 1,
			'advance' => 1,
			'salary' => 1,
			'bonus' => 1,
			'festival_bonus' => 1,
			'holiday_bonus' => 1,
			'entry_by' => 1,
			'status' => 1,
			'created' => '2018-10-23 06:53:19',
			'modified' => '2018-10-23 06:53:19'
		),
	);

}
