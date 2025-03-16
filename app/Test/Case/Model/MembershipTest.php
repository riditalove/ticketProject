<?php
App::uses('Membership', 'Model');

/**
 * Membership Test Case
 */
class MembershipTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.membership',
		'app.traveller',
		'app.designation',
		'app.department',
		'app.company',
		'app.companytype',
		'app.companynature',
		'app.user',
		'app.role',
		'app.login',
		'app.section',
		'app.healthrecord',
		'app.country',
		'app.visahistory',
		'app.travelexpense',
		'app.travelhistory'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Membership = ClassRegistry::init('Membership');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Membership);

		parent::tearDown();
	}

}
