<?php
App::uses('Kpicriteria1po', 'Model');

/**
 * Kpicriteria1po Test Case
 */
class Kpicriteria1poTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.kpicriteria1po'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Kpicriteria1po = ClassRegistry::init('Kpicriteria1po');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Kpicriteria1po);

		parent::tearDown();
	}

}
