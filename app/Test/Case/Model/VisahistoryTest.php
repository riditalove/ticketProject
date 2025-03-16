<?php
App::uses('Visahistory', 'Model');

/**
 * Visahistory Test Case
 */
class VisahistoryTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.visahistory',
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
		'app.travelhistory'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Visahistory = ClassRegistry::init('Visahistory');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Visahistory);

		parent::tearDown();
	}

}
