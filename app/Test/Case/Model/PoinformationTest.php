<?php
App::uses('Poinformation', 'Model');

/**
 * Poinformation Test Case
 */
class PoinformationTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.poinformation',
		'app.preproduction',
		'app.kpibuyer',
		'app.kpiorder',
		'app.kpifactory',
		'app.kpidepartment',
		'app.country'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Poinformation = ClassRegistry::init('Poinformation');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Poinformation);

		parent::tearDown();
	}

}
