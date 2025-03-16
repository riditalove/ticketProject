<?php
App::uses('Othprocessfactory', 'Model');

/**
 * Othprocessfactory Test Case
 */
class OthprocessfactoryTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.othprocessfactory',
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
		'app.packingstatus',
		'app.printembstatus',
		'app.sewinginputstatus',
		'app.washstatus',
		'app.denimwashfactory',
		'app.dyeingfactory',
		'app.textilewashfactory',
		'app.printfactory',
		'app.embroideryfactory',
		'app.fabricmillfactory',
		'app.fiberprodfactory',
		'app.spinningmillfactory'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Othprocessfactory = ClassRegistry::init('Othprocessfactory');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Othprocessfactory);

		parent::tearDown();
	}

}
