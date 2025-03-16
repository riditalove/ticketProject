<?php
App::uses('Kpiprintfactory', 'Model');

/**
 * Kpiprintfactory Test Case
 */
class KpiprintfactoryTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.kpiprintfactory'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Kpiprintfactory = ClassRegistry::init('Kpiprintfactory');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Kpiprintfactory);

		parent::tearDown();
	}

}
