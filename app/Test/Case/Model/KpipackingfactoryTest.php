<?php
App::uses('Kpipackingfactory', 'Model');

/**
 * Kpipackingfactory Test Case
 */
class KpipackingfactoryTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.kpipackingfactory'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Kpipackingfactory = ClassRegistry::init('Kpipackingfactory');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Kpipackingfactory);

		parent::tearDown();
	}

}
