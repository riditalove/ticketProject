<?php
App::uses('Log', 'Model');

/**
 * Log Test Case
 * Owner: Abdul Jalil
 * http://www.softwareend.com
 */
class LogTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.log',
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
		'app.payment',
		'app.salary',
		'app.usercard',
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
		$this->Log = ClassRegistry::init('Log');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Log);

		parent::tearDown();
	}

}
