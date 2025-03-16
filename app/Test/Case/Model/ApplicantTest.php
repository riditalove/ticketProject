<?php
App::uses('Applicant', 'Model');

/**
 * Applicant Test Case
 */
class ApplicantTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.applicant',
		'app.purchasecontact'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Applicant = ClassRegistry::init('Applicant');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Applicant);

		parent::tearDown();
	}

}
