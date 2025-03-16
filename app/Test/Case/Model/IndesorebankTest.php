<?php
App::uses('Indesorebank', 'Model');

/**
 * Indesorebank Test Case
 */
class IndesorebankTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.indesorebank'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Indesorebank = ClassRegistry::init('Indesorebank');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Indesorebank);

		parent::tearDown();
	}

}
