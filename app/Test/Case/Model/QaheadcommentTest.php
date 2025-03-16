<?php
App::uses('Qaheadcomment', 'Model');

/**
 * Qaheadcomment Test Case
 */
class QaheadcommentTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qaheadcomment'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Qaheadcomment = ClassRegistry::init('Qaheadcomment');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Qaheadcomment);

		parent::tearDown();
	}

}
