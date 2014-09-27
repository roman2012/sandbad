<?php
App::uses('Job', 'jobs.Model');

/**
 * Job Test Case
 *
 */
class JobTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.jobs.job',
		'plugin.jobs.category',
		'plugin.jobs.guild',
		'plugin.jobs.city',
		'plugin.jobs.user'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Job = ClassRegistry::init('jobs.Job');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Job);

		parent::tearDown();
	}

}
