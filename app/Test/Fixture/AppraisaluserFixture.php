<?php
/**
 * AppraisaluserFixture
 *
 */
class AppraisaluserFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true, 'key' => 'primary'),
		'appraisal_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true),
		'appraisalkra_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'description' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'weight' => array('type' => 'float', 'null' => false, 'default' => null, 'unsigned' => false),
		'own_evaluation' => array('type' => 'float', 'null' => false, 'default' => null, 'unsigned' => false),
		'reporting_to_evaluation' => array('type' => 'float', 'null' => false, 'default' => null, 'unsigned' => false),
		'reporting_to' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true),
		'status' => array('type' => 'boolean', 'null' => false, 'default' => null),
		'is_cmmon' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 1, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'entry_by' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true, 'comment' => 'user_id'),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'edit_by' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 10, 'unsigned' => true, 'comment' => 'user_id'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_unicode_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'appraisal_id' => 1,
			'appraisalkra_id' => 1,
			'user_id' => 1,
			'name' => 'Lorem ipsum dolor sit amet',
			'description' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'weight' => 1,
			'own_evaluation' => 1,
			'reporting_to_evaluation' => 1,
			'reporting_to' => 1,
			'status' => 1,
			'is_cmmon' => 'Lorem ipsum dolor sit ame',
			'created' => '2019-04-06 16:58:58',
			'entry_by' => 1,
			'modified' => '2019-04-06 16:58:58',
			'edit_by' => 1
		),
	);

}
