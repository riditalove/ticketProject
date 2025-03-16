<?php
/**
 * Ppmeetingstatus Fixture
 */
class PpmeetingstatusFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true, 'key' => 'primary'),
		'preproduction_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true),
		'expqafile_handover' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'acqafile_handover' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'exp_pp_meeting_date' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'ac_pp_meeting_date' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'action_date' => array('type' => 'date', 'null' => false, 'default' => null),
		'status' => array('type' => 'tinyinteger', 'null' => false, 'default' => null, 'length' => 3, 'unsigned' => false),
		'apv_by' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true),
		'apv_date' => array('type' => 'date', 'null' => false, 'default' => null),
		'entry_by' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true),
		'edit_by' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true),
		'created' => array('type' => 'timestamp', 'null' => true, 'default' => null),
		'modified' => array('type' => 'timestamp', 'null' => true, 'default' => null),
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
			'expqafile_handover' => 1,
			'acqafile_handover' => 1,
			'exp_pp_meeting_date' => 1,
			'ac_pp_meeting_date' => 1,
			'action_date' => '2024-05-06',
			'status' => 1,
			'apv_by' => 1,
			'apv_date' => '2024-05-06',
			'entry_by' => 1,
			'edit_by' => 1,
			'created' => 1714988634,
			'modified' => 1714988634
		),
	);

}
