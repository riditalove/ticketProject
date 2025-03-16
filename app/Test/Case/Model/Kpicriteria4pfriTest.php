<?php
App::uses('Kpicriteria4pfri', 'Model');

/**
 * Kpicriteria4pfri Test Case
 */
class Kpicriteria4pfriTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.kpicriteria4pfri'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Kpicriteria4pfri = ClassRegistry::init('Kpicriteria4pfri');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Kpicriteria4pfri);

		parent::tearDown();
	}

}
