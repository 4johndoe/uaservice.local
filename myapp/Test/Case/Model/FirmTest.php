<?php
App::uses('Firm', 'Model');

/**
 * Firm Test Case
 *
 */
class FirmTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.firm',
		'app.lic'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Firm = ClassRegistry::init('Firm');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Firm);

		parent::tearDown();
	}

}
