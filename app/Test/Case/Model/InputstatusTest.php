<?php
App::uses('Inputstatus', 'Model');

/**
 * Inputstatus Test Case
 */
class InputstatusTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.inputstatus',
		'app.preproduction',
		'app.kpifactory',
		'app.kpiorder',
		'app.kpidepartment',
		'app.cuttingstatus',
		'app.fitstatus',
		'app.fristatus',
		'app.packingstatus',
		'app.ppmeetingstatus',
		'app.ppstatus',
		'app.printembstatus',
		'app.sewinginputstatus',
		'app.traceabilityteam',
		'app.washstatus'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Inputstatus = ClassRegistry::init('Inputstatus');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Inputstatus);

		parent::tearDown();
	}

}
