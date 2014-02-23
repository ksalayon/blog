<?php
App::uses('CategoryController', 'Controller');

/**
 * CategoryController Test Case
 *
 */
class CategoryController extends ControllerCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.post',
		'app.category',
		'app.categories_post'
	);

/**
 * testIndex method
 *
 * @return void
 */
	public function testIndex() {
	}

/**
 * testView method
 *
 * @return void
 */
	public function testView() {
	}

/**
 * testAdd method
 *
 * @return void
 */
	public function testAdd() {
	}

/**
 * testEdit method
 *
 * @return void
 */
	public function testEdit() {
	}

/**
 * testDelete method
 *
 * @return void
 */
		public function testGetLatestCategory()
	{
		$latestCategory = $this->Category->find('first', array('order' => array('Post.created DESC'), 'limit' => 4));
		logdebug($latestCategory);
	}

}
