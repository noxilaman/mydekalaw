<?php
App::uses('TbLawdatum', 'Model');

/**
 * TbLawdatum Test Case
 *
 */
class TbLawdatumTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.tb_lawdatum'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->TbLawdatum = ClassRegistry::init('TbLawdatum');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->TbLawdatum);

		parent::tearDown();
	}

}
