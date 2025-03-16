<?php
App::uses('Kpicriteria7qty', 'Model');

/**
 * Kpicriteria7qty Test Case
 */
class Kpicriteria7qtyTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.kpicriteria7qty'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Kpicriteria7qty = ClassRegistry::init('Kpicriteria7qty');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Kpicriteria7qty);

		parent::tearDown();
	}

}
