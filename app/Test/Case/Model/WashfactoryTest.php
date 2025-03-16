<?php
App::uses('Washfactory', 'Model');

/**
 * Washfactory Test Case
 */
class WashfactoryTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.washfactory',
		'app.preproduction',
		'app.kpifactory',
		'app.kpiorder',
		'app.kpidepartment',
		'app.user',
		'app.company',
		'app.companytype',
		'app.companynature',
		'app.department',
		'app.section',
		'app.designation',
		'app.role',
		'app.login',
		'app.cuttingstatus',
		'app.fristatus',
		'app.inputstatus',
		'app.packingstatus',
		'app.printembstatus',
		'app.sewinginputstatus',
		'app.traceabilityteam',
		'app.washstatus',
		'app.traceabilityteams'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Washfactory = ClassRegistry::init('Washfactory');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Washfactory);

		parent::tearDown();
	}

}
