<?php
App::uses('Department', 'Model');

/**
 * Department Test Case
 */
class DepartmentTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.department',
		'app.company',
		'app.companytype',
		'app.companynature',
		'app.user',
		'app.section',
		'app.designation',
		'app.role',
		'app.attendance',
		'app.userleave',
		'app.useraccount',
		'app.payment',
		'app.salary',
		'app.usercard',
		'app.userfamily',
		'app.usereducation',
		'app.userexperience',
		'app.userfile',
		'app.usertraining',
		'app.usercompany',
		'app.usermedical',
		'app.usernominee',
		'app.usertransfer',
		'app.ebook',
		'app.onduty',
		'app.userschedule'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Department = ClassRegistry::init('Department');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Department);

		parent::tearDown();
	}

}
