<?php
App::uses('Ppmeetingstatus', 'Model');

/**
 * Ppmeetingstatus Test Case
 */
class PpmeetingstatusTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.ppmeetingstatus',
		'app.preproduction',
		'app.kpifactory',
		'app.kpiorder',
		'app.kpidepartment',
		'app.cuttingstatus',
		'app.fitstatus',
		'app.fristatus',
		'app.inputstatus',
		'app.packingstatus',
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
		$this->Ppmeetingstatus = ClassRegistry::init('Ppmeetingstatus');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Ppmeetingstatus);

		parent::tearDown();
	}

}
