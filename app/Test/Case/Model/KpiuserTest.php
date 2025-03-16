<?php
App::uses('Kpiuser', 'Model');

/**
 * Kpiuser Test Case
 * Owner: Abdul Jalil
 * http://www.softwareend.com
 */
class KpiuserTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.kpiuser',
		'app.company',
		'app.companytype',
		'app.companynature',
		'app.department',
		'app.section',
		'app.user',
		'app.designation',
		'app.role',
		'app.attendance',
		'app.userleave',
		'app.log',
		'app.payment',
		'app.salary',
		'app.usercard',
		'app.userfamily',
		'app.usereducation',
		'app.userexperience',
		'app.userfile',
		'app.usertraining',
		'app.country',
		'app.district',
		'app.usercompany'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Kpiuser = ClassRegistry::init('Kpiuser');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Kpiuser);

		parent::tearDown();
	}

}
