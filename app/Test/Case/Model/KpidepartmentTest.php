<?php
App::uses('Kpidepartment', 'Model');

/**
 * Kpidepartment Test Case
 */
class KpidepartmentTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.kpidepartment',
		'app.kpiorder'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Kpidepartment = ClassRegistry::init('Kpidepartment');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Kpidepartment);

		parent::tearDown();
	}

}
