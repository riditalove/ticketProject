<?php
App::uses('Appraisaluserkra', 'Model');

/**
 * Appraisaluserkra Test Case
 * Owner: Abdul Jalil
 * http://www.softwareend.com
 */
class AppraisaluserkraTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.appraisaluserkra',
		'app.appraisaluser',
		'app.user',
		'app.company',
		'app.companytype',
		'app.companynature',
		'app.department',
		'app.section',
		'app.announcement',
		'app.companyschedule',
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
		'app.appraisal',
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
		$this->Appraisaluserkra = ClassRegistry::init('Appraisaluserkra');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Appraisaluserkra);

		parent::tearDown();
	}

}
