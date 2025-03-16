<?php
App::uses('Food', 'Model');

/**
 * Food Test Case
 * Owner: Abdul Jalil
 * http://www.softwareend.com
 */
class FoodTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.food'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Food = ClassRegistry::init('Food');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Food);

		parent::tearDown();
	}

}
