<?php
App::uses('Kpiproduct', 'Model');

/**
 * Kpiproduct Test Case
 */
class KpiproductTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.kpiproduct',
		'app.kpiorder',
		'app.kpioffice',
		'app.kpibuyer',
		'app.country',
		'app.courier',
		'app.kpifactory',
		'app.kpidepartment'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Kpiproduct = ClassRegistry::init('Kpiproduct');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Kpiproduct);

		parent::tearDown();
	}

}
