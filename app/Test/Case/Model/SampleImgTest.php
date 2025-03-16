<?php
App::uses('SampleImg', 'Model');

/**
 * SampleImg Test Case
 */
class SampleImgTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.sample_img',
		'app.sample',
		'app.kpifactory',
		'app.kpiorder'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->SampleImg = ClassRegistry::init('SampleImg');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->SampleImg);

		parent::tearDown();
	}

}
