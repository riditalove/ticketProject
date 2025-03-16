<?php
App::uses('Companyleave', 'Model');

/**
 * Companyleave Test Case
 * Owner: Abdul Jalil
 * http://www.softwareend.com
 */
class CompanyleaveTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.companyleave',
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
		'app.ebook',
		'app.announcement'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Companyleave = ClassRegistry::init('Companyleave');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Companyleave);

		parent::tearDown();
	}

}
