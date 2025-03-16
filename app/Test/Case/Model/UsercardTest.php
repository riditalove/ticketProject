<?php
App::uses('Usercard', 'Model');

/**
 * Usercard Test Case
 * Owner: Abdul Jalil
 * http://www.softwareend.com
 */
class UsercardTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.usercard',
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
		'app.userfamily',
		'app.usereducation',
		'app.userexperience',
		'app.userfile',
		'app.usertraining'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Usercard = ClassRegistry::init('Usercard');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Usercard);

		parent::tearDown();
	}

}
