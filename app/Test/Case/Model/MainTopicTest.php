<?php
App::uses('MainTopic', 'Model');

/**
 * MainTopic Test Case
 *
 */
class MainTopicTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.main_topic',
		'app.sub_topic'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->MainTopic = ClassRegistry::init('MainTopic');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->MainTopic);

		parent::tearDown();
	}

}
