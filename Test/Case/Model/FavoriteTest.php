<?php
App::uses('Favorite', 'Model');

/**
 * Favorite Test Case
 *
 */
class FavoriteTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.favorite',
		'app.tb_lawdatum',
		'app.user',
		'app.group'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Favorite = ClassRegistry::init('Favorite');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Favorite);

		parent::tearDown();
	}

}
