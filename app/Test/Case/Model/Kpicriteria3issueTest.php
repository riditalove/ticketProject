<?php
App::uses('Kpicriteria3issue', 'Model');

/**
 * Kpicriteria3issue Test Case
 */
class Kpicriteria3issueTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.kpicriteria3issue'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Kpicriteria3issue = ClassRegistry::init('Kpicriteria3issue');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Kpicriteria3issue);

		parent::tearDown();
	}

}
