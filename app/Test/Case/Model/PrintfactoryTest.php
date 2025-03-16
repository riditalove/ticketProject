<?php
App::uses('Printfactory', 'Model');

/**
 * Printfactory Test Case
 */
class PrintfactoryTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.printfactory',
		'app.traceabilityteam',
		'app.preproduction',
		'app.kpifactory',
		'app.kpiorder',
		'app.kpidepartment',
		'app.kpibuyer',
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
		'app.washstatus',
		'app.denimwashfactory',
		'app.traceabilityteams',
		'app.dyeingfactory',
		'app.textilewashfactory'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Printfactory = ClassRegistry::init('Printfactory');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Printfactory);

		parent::tearDown();
	}

}
