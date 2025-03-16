<?php
App::uses('Kpifactory', 'Model');

/**
 * Kpifactory Test Case
 */
class KpifactoryTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.kpifactory',
		'app.country',
		'app.kpiorder'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Kpifactory = ClassRegistry::init('Kpifactory');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Kpifactory);

		parent::tearDown();
	}

}
