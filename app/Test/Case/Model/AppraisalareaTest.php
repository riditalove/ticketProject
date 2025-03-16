<?php
App::uses('Appraisalarea', 'Model');

/**
 * Appraisalarea Test Case
 * Owner: Abdul Jalil
 * http://www.softwareend.com
 */
class AppraisalareaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.appraisalarea',
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
		'app.appraisalkra'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Appraisalarea = ClassRegistry::init('Appraisalarea');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Appraisalarea);

		parent::tearDown();
	}

}
