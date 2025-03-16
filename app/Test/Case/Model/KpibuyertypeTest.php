<?php
App::uses('Kpibuyertype', 'Model');

/**
 * Kpibuyertype Test Case
 */
class KpibuyertypeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.kpibuyertype',
		'app.kpicriteria2pp',
		'app.kpicriteria6fri'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Kpibuyertype = ClassRegistry::init('Kpibuyertype');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Kpibuyertype);

		parent::tearDown();
	}

}
