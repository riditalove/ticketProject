<?php
App::uses('Washstatus', 'Model');

/**
 * Washstatus Test Case
 */
class WashstatusTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.washstatus',
		'app.preproduction',
		'app.kpifactory',
		'app.kpiorder',
		'app.kpidepartment',
		'app.cuttingstatus',
		'app.fitstatus',
		'app.fristatus',
		'app.inputstatus',
		'app.packingstatus',
		'app.ppmeetingstatus',
		'app.ppstatus',
		'app.printembstatus',
		'app.sewinginputstatus',
		'app.traceabilityteam'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Washstatus = ClassRegistry::init('Washstatus');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Washstatus);

		parent::tearDown();
	}

}
