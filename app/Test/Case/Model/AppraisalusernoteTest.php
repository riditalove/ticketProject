<?php
App::uses('Appraisalusernote', 'Model');

/**
 * Appraisalusernote Test Case
 * Owner: Abdul Jalil
 * http://www.softwareend.com
 */
class AppraisalusernoteTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.appraisalusernote',
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
		'app.appraisalarea'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Appraisalusernote = ClassRegistry::init('Appraisalusernote');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Appraisalusernote);

		parent::tearDown();
	}

}
