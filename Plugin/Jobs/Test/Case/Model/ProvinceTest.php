<?php
App::uses('Province', 'Jobs.Model');

/**
 * Province Test Case
 *
 */
class ProvinceTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.jobs.province',
		'plugin.jobs.city'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Province = ClassRegistry::init('Jobs.Province');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Province);

		parent::tearDown();
	}

}
