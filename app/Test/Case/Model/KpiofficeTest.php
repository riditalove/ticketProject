<?php
App::uses('Kpioffice', 'Model');

/**
 * Kpioffice Test Case
 */
class KpiofficeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.kpioffice',
		'app.kpiorder'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Kpioffice = ClassRegistry::init('Kpioffice');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Kpioffice);

		parent::tearDown();
	}

}
