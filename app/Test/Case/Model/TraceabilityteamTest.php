<?php
App::uses('Traceabilityteam', 'Model');

/**
 * Traceabilityteam Test Case
 */
class TraceabilityteamTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.traceabilityteam',
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
		'app.washstatus'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Traceabilityteam = ClassRegistry::init('Traceabilityteam');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Traceabilityteam);

		parent::tearDown();
	}

}
