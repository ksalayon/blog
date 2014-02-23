<?php
App::uses('Contact', 'Model');

/**
 * Contact Test Case
 *
 */
class CategoryTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.contact',
		'app.category',
		'app.categories_post',
		'app.post'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Category = ClassRegistry::init('Category');
		$this->Post = ClassRegistry::init('Post');
		$this->CategoriesPost = ClassRegistry::init('CategoriesPost');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Category);
		unset($this->Post);
		unset($this->CategoriesPost);
		parent::tearDown();
	}

	public function testGetCategories()
	{
		//$results = $this->Category->getLatest();
		//$this->assertEqual(count($results), 4);
	}
	
	public function testGetLatestCategory()
	{
		$latestCategory = $this->Category->find('all', array('order' => array('Category.created DESC')));
		debug($latestCategory);
	}
	
}
