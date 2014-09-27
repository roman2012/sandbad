<?php
App::uses('Guild', 'Jobs.Model');

/**
 * Guild Test Case
 *
 */
class GuildTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.jobs.guild'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Guild = ClassRegistry::init('Jobs.Guild');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Guild);

		parent::tearDown();
	}

}
