<?php
App::uses('Realization', 'Model');

/**
 * Realization Test Case
 */
class RealizationTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.realization'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Realization = ClassRegistry::init('Realization');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Realization);

		parent::tearDown();
	}

}
