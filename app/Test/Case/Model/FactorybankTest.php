<?php
App::uses('Factorybank', 'Model');

/**
 * Factorybank Test Case
 */
class FactorybankTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.factorybank',
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
		$this->Factorybank = ClassRegistry::init('Factorybank');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Factorybank);

		parent::tearDown();
	}

}
