<?php
App::uses('Kpicriteria6fri', 'Model');

/**
 * Kpicriteria6fri Test Case
 */
class Kpicriteria6friTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.kpicriteria6fri',
		'app.kpibuyertype',
		'app.kpicriteria2pp'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Kpicriteria6fri = ClassRegistry::init('Kpicriteria6fri');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Kpicriteria6fri);

		parent::tearDown();
	}

}
