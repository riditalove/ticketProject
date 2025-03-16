<?php
/**
 * KpiuserFixture
 *
 */
class KpiuserFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true, 'key' => 'primary'),
		'company_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 3, 'unsigned' => true),
		'department_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 5, 'unsigned' => true),
		'time_span' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 3, 'unsigned' => true),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true),
		'title' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'utf8_bin', 'charset' => 'utf8'),
		'value' => array('type' => 'float', 'null' => false, 'default' => null, 'unsigned' => false),
		'target' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'utf8_bin', 'charset' => 'utf8'),
		'own_evaluation' => array('type' => 'float', 'null' => true, 'default' => null, 'unsigned' => false),
		'own_evaluation_date' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'manager' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 10, 'unsigned' => true),
		'manager_evaluation' => array('type' => 'float', 'null' => true, 'default' => null, 'unsigned' => false),
		'manager_remark' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_bin', 'charset' => 'utf8'),
		'manager_evaluation_date' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'report_to' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 10, 'unsigned' => true),
		'report_to_evaluation' => array('type' => 'float', 'null' => true, 'default' => null, 'unsigned' => false),
		'report_to_remark' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_bin', 'charset' => 'utf8'),
		'report_to_evaluation_date' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'entry_by' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 10, 'unsigned' => true, 'comment' => 'user_id'),
		'status' => array('type' => 'boolean', 'null' => false, 'default' => null),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
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
			'time_span' => 1,
			'user_id' => 1,
			'title' => 'Lorem ipsum dolor sit amet',
			'value' => 1,
			'target' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'own_evaluation' => 1,
			'own_evaluation_date' => '2018-11-21 10:30:45',
			'manager' => 1,
			'manager_evaluation' => 1,
			'manager_remark' => 'Lorem ipsum dolor sit amet',
			'manager_evaluation_date' => '2018-11-21 10:30:45',
			'report_to' => 1,
			'report_to_evaluation' => 1,
			'report_to_remark' => 'Lorem ipsum dolor sit amet',
			'report_to_evaluation_date' => '2018-11-21 10:30:45',
			'entry_by' => 1,
			'status' => 1,
			'created' => '2018-11-21 10:30:45'
		),
	);

}
