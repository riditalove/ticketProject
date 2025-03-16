<?php
App::uses('Kpiorder', 'Model');

/**
 * Kpiorder Test Case
 */
class KpiorderTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.kpiorder',
		'app.kpioffice',
		'app.kpibuyer',
		'app.country',
		'app.courier',
		'app.kpifactory',
		'app.kpidepartment',
		'app.kpiproduct'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Kpiorder = ClassRegistry::init('Kpiorder');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Kpiorder);

		parent::tearDown();
	}

}
