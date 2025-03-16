<?php
App::uses('Kpibuyer', 'Model');

/**
 * Kpibuyer Test Case
 */
class KpibuyerTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.kpibuyer',
		'app.country',
		'app.courier',
		'app.kpiorder'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Kpibuyer = ClassRegistry::init('Kpibuyer');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Kpibuyer);

		parent::tearDown();
	}

}
