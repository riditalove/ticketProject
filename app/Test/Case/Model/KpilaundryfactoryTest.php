<?php
App::uses('Kpilaundryfactory', 'Model');

/**
 * Kpilaundryfactory Test Case
 */
class KpilaundryfactoryTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.kpilaundryfactory',
		'app.country'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Kpilaundryfactory = ClassRegistry::init('Kpilaundryfactory');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Kpilaundryfactory);

		parent::tearDown();
	}

}
