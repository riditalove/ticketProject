<?php
App::uses('Sample', 'Model');

/**
 * Sample Test Case
 */
class SampleTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.sample',
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
		$this->Sample = ClassRegistry::init('Sample');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Sample);

		parent::tearDown();
	}

}
