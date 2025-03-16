<?php
App::uses('Userfile', 'Model');

/**
 * Userfile Test Case
 * Owner: Abdul Jalil
 * http://www.softwareend.com
 */
class UserfileTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.userfile',
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
		'app.usertraining'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Userfile = ClassRegistry::init('Userfile');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Userfile);

		parent::tearDown();
	}

}
