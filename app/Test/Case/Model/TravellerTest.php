<?php
App::uses('Traveller', 'Model');

/**
 * Traveller Test Case
 */
class TravellerTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
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
		'app.membership',
		'app.travelexpense',
		'app.travelhistory',
		'app.visahistory'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Traveller = ClassRegistry::init('Traveller');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Traveller);

		parent::tearDown();
	}

}
