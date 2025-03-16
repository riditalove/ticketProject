<?php
App::uses('Useraccount', 'Model');

/**
 * Useraccount Test Case
 * Owner: Abdul Jalil
 * http://www.softwareend.com
 */
class UseraccountTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.useraccount',
		'app.user',
		'app.company',
		'app.companytype',
		'app.companynature',
		'app.department',
		'app.section',
		'app.designation',
		'app.role',
		'app.attendance',
		'app.userleave',
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
		'app.district'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Useraccount = ClassRegistry::init('Useraccount');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Useraccount);

		parent::tearDown();
	}

}
