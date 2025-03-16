<?php
App::uses('Fabricmillfactory', 'Model');

/**
 * Fabricmillfactory Test Case
 */
class FabricmillfactoryTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.fabricmillfactory',
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
		'app.textilewashfactory',
		'app.printfactory',
		'app.embroideryfactory'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Fabricmillfactory = ClassRegistry::init('Fabricmillfactory');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Fabricmillfactory);

		parent::tearDown();
	}

}
