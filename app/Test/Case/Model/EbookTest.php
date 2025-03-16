<?php
App::uses('Ebook', 'Model');

/**
 * Ebook Test Case
 * Owner: Abdul Jalil
 * http://www.softwareend.com
 */
class EbookTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.ebook'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Ebook = ClassRegistry::init('Ebook');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Ebook);

		parent::tearDown();
	}

}
