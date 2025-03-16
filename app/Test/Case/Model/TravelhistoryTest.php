<?php
App::uses('Travelhistory', 'Model');

/**
 * Travelhistory Test Case
 */
class TravelhistoryTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.travelhistory',
		'app.traveller'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Travelhistory = ClassRegistry::init('Travelhistory');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Travelhistory);

		parent::tearDown();
	}

}
