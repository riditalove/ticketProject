<?php
App::uses('Appraisaluser', 'Model');

/**
 * Appraisaluser Test Case
 * Owner: Abdul Jalil
 * http://www.softwareend.com
 */
class AppraisaluserTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.appraisaluser',
		'app.appraisal',
		'app.company',
		'app.companytype',
		'app.companynature',
		'app.department',
		'app.section',
		'app.user',
		'app.designation',
		'app.role',
		'app.attendance',
		'app.userleave',
		'app.companyleave',
		'app.useraccount',
		'app.log',
		'app.payment',
		'app.salary',
		'app.usercard',
		'app.userfamily',
		'app.usereducation',
		'app.userexperience',
		'app.userfile',
		'app.usertraining',
		'app.country',
		'app.district',
		'app.usercompany',
		'app.usermedical',
		'app.usernominee',
		'app.usertransfer',
		'app.ebook',
		'app.onduty',
		'app.userschedule',
		'app.announcement',
		'app.companyschedule',
		'app.appraisalkra',
		'app.appraisalarea',
		'app.appraisalusernote'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Appraisaluser = ClassRegistry::init('Appraisaluser');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Appraisaluser);

		parent::tearDown();
	}

}
