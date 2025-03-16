<?php
App::uses('Usertransfer', 'Model');

/**
 * Usertransfer Test Case
 * Owner: Abdul Jalil
 * http://www.softwareend.com
 */
class UsertransferTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.usertransfer',
		'app.user',
		'app.company',
		'app.companytype',
		'app.companynature',
		'app.department',
		'app.section',
		'app.announcement',
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
		'app.previous_company',
		'app.previous_department',
		'app.previous_section',
		'app.previous_designation'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Usertransfer = ClassRegistry::init('Usertransfer');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Usertransfer);

		parent::tearDown();
	}

}
