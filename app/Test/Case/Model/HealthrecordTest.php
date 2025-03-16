<?php
App::uses('Healthrecord', 'Model');

/**
 * Healthrecord Test Case
 */
class HealthrecordTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.healthrecord',
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
		'app.membership',
		'app.travelexpense',
		'app.travelhistory',
		'app.visahistory',
		'app.country'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Healthrecord = ClassRegistry::init('Healthrecord');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Healthrecord);

		parent::tearDown();
	}

}
