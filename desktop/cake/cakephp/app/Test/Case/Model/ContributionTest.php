<?php
App::uses('Contribution', 'Model');

/**
 * Contribution Test Case
 *
 */
class ContributionTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.contribution'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Contribution = ClassRegistry::init('Contribution');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Contribution);

		parent::tearDown();
	}

}
