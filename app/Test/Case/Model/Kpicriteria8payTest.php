<?php
App::uses('Kpicriteria8pay', 'Model');

/**
 * Kpicriteria8pay Test Case
 */
class Kpicriteria8payTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.kpicriteria8pay'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Kpicriteria8pay = ClassRegistry::init('Kpicriteria8pay');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Kpicriteria8pay);

		parent::tearDown();
	}

}
