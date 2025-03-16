<?php
App::uses('Cuttingstatus', 'Model');

/**
 * Cuttingstatus Test Case
 */
class CuttingstatusTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.cuttingstatus',
		'app.preproduction',
		'app.kpifactory',
		'app.kpiorder',
		'app.kpidepartment',
		'app.fitstatus',
		'app.fristatus',
		'app.inputstatus',
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
		$this->Cuttingstatus = ClassRegistry::init('Cuttingstatus');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Cuttingstatus);

		parent::tearDown();
	}

}
