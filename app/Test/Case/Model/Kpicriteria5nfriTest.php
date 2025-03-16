<?php
App::uses('Kpicriteria5nfri', 'Model');

/**
 * Kpicriteria5nfri Test Case
 */
class Kpicriteria5nfriTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.kpicriteria5nfri'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Kpicriteria5nfri = ClassRegistry::init('Kpicriteria5nfri');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Kpicriteria5nfri);

		parent::tearDown();
	}

}
