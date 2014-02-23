<?php
App::uses('Post', 'Model');

/**
 * Post Test Case
 *
 */
class PostTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.post'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Post = ClassRegistry::init('Post');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Post);

		parent::tearDown();
	}
	
	public function testGetLatestPost()
	{
		$latestPost = $this->Post->find('all', array('order' => array('Post.created DESC'), 'limit' => 4));
	}
	
	public function testgetLatestMethod()
	{
		$r1 = $this->Post->getLatest();

		$this->assertEqual(count($r1), 3);
		$r2 = $this->Post->getLatest(10);

		$this->assertEqual(count($r2), 5);
	}
	
}
