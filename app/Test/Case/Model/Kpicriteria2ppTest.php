<?php
App::uses('Kpicriteria2pp', 'Model');

/**
 * Kpicriteria2pp Test Case
 */
class Kpicriteria2ppTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.kpicriteria2pp',
		'app.kpibuyertype',
		'app.kpicriteria6fri'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Kpicriteria2pp = ClassRegistry::init('Kpicriteria2pp');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Kpicriteria2pp);

		parent::tearDown();
	}

}
