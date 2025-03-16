<?php
App::uses('Product', 'Model');

/**
 * Product Test Case
 * Owner: Abdul Jalil
 * http://www.softwareend.com
 */
class ProductTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.product',
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
		'app.project',
		'app.thana',
		'app.materialpurchase_item',
		'app.material',
		'app.materialissue_item',
		'app.production_item',
		'app.sale_item'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Product = ClassRegistry::init('Product');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Product);

		parent::tearDown();
	}

}
