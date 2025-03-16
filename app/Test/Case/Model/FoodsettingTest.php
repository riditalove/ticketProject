<?php
App::uses('Foodsetting', 'Model');

/**
 * Foodsetting Test Case
 * Owner: Abdul Jalil
 * http://www.softwareend.com
 */
class FoodsettingTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.foodsetting'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Foodsetting = ClassRegistry::init('Foodsetting');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Foodsetting);

		parent::tearDown();
	}

}
