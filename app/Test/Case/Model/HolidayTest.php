<?php
App::uses('Holiday', 'Model');

/**
 * Holiday Test Case
 * Owner: Abdul Jalil
 * http://www.softwareend.com
 */
class HolidayTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.holiday'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Holiday = ClassRegistry::init('Holiday');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Holiday);

		parent::tearDown();
	}

}
