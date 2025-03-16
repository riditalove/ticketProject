<?php
App::uses('Kpisewingfactory', 'Model');

/**
 * Kpisewingfactory Test Case
 */
class KpisewingfactoryTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.kpisewingfactory'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Kpisewingfactory = ClassRegistry::init('Kpisewingfactory');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Kpisewingfactory);

		parent::tearDown();
	}

}
