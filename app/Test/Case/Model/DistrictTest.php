<?php
App::uses('District', 'Model');

/**
 * District Test Case
 * Owner: Abdul Jalil
 * http://www.softwareend.com
 */
class DistrictTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.district',
		'app.country',
		'app.usertraining',
		'app.division'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->District = ClassRegistry::init('District');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->District);

		parent::tearDown();
	}

}
