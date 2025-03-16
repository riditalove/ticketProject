<?php
App::uses('Spinningmillfactory', 'Model');

/**
 * Spinningmillfactory Test Case
 */
class SpinningmillfactoryTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.spinningmillfactory',
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
		$this->Spinningmillfactory = ClassRegistry::init('Spinningmillfactory');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Spinningmillfactory);

		parent::tearDown();
	}

}
