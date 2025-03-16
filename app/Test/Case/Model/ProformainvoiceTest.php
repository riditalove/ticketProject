<?php
App::uses('Proformainvoice', 'Model');

/**
 * Proformainvoice Test Case
 */
class ProformainvoiceTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.proformainvoice',
		'app.applicant',
		'app.purchasecontract',
		'app.kpifactory',
		'app.factorybank',
		'app.indesorebank'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Proformainvoice = ClassRegistry::init('Proformainvoice');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Proformainvoice);

		parent::tearDown();
	}

}
