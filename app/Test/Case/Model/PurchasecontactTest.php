<?php
App::uses('Purchasecontact', 'Model');

/**
 * Purchasecontact Test Case
 */
class PurchasecontactTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.purchasecontact',
		'app.applicant',
		'app.kpifactory',
		'app.kpiorder'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Purchasecontact = ClassRegistry::init('Purchasecontact');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Purchasecontact);

		parent::tearDown();
	}

}
