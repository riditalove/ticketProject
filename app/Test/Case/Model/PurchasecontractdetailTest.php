<?php
App::uses('Purchasecontractdetail', 'Model');

/**
 * Purchasecontractdetail Test Case
 */
class PurchasecontractdetailTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.purchasecontractdetail',
		'app.purchasecontract',
		'app.applicant',
		'app.purchasecontact',
		'app.kpifactory',
		'app.kpiorder',
		'app.poinformation',
		'app.preproduction',
		'app.kpidepartment',
		'app.kpibuyer',
		'app.user',
		'app.company',
		'app.companytype',
		'app.companynature',
		'app.department',
		'app.section',
		'app.designation',
		'app.role',
		'app.login',
		'app.country'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Purchasecontractdetail = ClassRegistry::init('Purchasecontractdetail');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Purchasecontractdetail);

		parent::tearDown();
	}

}
