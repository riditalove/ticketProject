<?php
App::uses('Purchasecontract', 'Model');

/**
 * Purchasecontract Test Case
 */
class PurchasecontractTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.purchasecontract',
		'app.applicant',
		'app.purchasecontact',
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
		$this->Purchasecontract = ClassRegistry::init('Purchasecontract');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Purchasecontract);

		parent::tearDown();
	}

}
