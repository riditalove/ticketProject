<?php
App::uses('Embroideryfactory', 'Model');

/**
 * Embroideryfactory Test Case
 */
class EmbroideryfactoryTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.embroideryfactory',
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
		$this->Embroideryfactory = ClassRegistry::init('Embroideryfactory');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Embroideryfactory);

		parent::tearDown();
	}

}
