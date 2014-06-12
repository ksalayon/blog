<?php
App::uses('SubTopic', 'Model');

/**
 * SubTopic Test Case
 *
 */
class SubTopicTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.sub_topic',
		'app.main_topic'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->SubTopic = ClassRegistry::init('SubTopic');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->SubTopic);

		parent::tearDown();
	}

}
