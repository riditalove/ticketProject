<?php
App::uses('SaleItem', 'Model');

/**
 * SaleItem Test Case
 * Owner: Abdul Jalil
 * http://www.softwareend.com
 */
class SaleItemTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.sale_item',
		'app.sale',
		'app.user',
		'app.role',
		'app.employee',
		'app.department',
		'app.worker',
		'app.designation',
		'app.attendance',
		'app.payment',
		'app.salary',
		'app.epayment',
		'app.esalary',
		'app.employeepresent',
		'app.employeeleave',
		'app.log',
		'app.materialissue',
		'app.section',
		'app.materialpurchase',
		'app.supplier',
		'app.country',
		'app.district',
		'app.division',
		'app.permaddress',
		'app.presaddress',
		'app.product',
		'app.production_item',
		'app.production',
		'app.project',
		'app.thana',
		'app.materialpurchase_item',
		'app.material',
		'app.materialissue_item',
		'app.customer'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->SaleItem = ClassRegistry::init('SaleItem');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->SaleItem);

		parent::tearDown();
	}

}
