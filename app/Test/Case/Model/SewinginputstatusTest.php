<?php
App::uses('Sewinginputstatus', 'Model');

/**
 * Sewinginputstatus Test Case
 */
class SewinginputstatusTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.sewinginputstatus',
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
		$this->Sewinginputstatus = ClassRegistry::init('Sewinginputstatus');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Sewinginputstatus);

		parent::tearDown();
	}

}
