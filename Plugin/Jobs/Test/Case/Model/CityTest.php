<?php
App::uses('City', 'jobs.Model');

/**
 * City Test Case
 *
 */
class CityTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.jobs.city',
		'plugin.jobs.province',
		'plugin.jobs.job'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->City = ClassRegistry::init('jobs.City');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->City);

		parent::tearDown();
	}

}
