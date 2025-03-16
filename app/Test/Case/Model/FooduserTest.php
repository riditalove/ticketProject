<?php
App::uses('Fooduser', 'Model');

/**
 * Fooduser Test Case
 * Owner: Abdul Jalil
 * http://www.softwareend.com
 */
class FooduserTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.fooduser',
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
		'app.district',
		'app.usercompany'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Fooduser = ClassRegistry::init('Fooduser');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Fooduser);

		parent::tearDown();
	}

}
