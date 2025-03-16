<?php
App::uses('Travelexpense', 'Model');

/**
 * Travelexpense Test Case
 */
class TravelexpenseTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.travelexpense',
		'app.traveller'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Travelexpense = ClassRegistry::init('Travelexpense');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Travelexpense);

		parent::tearDown();
	}

}
