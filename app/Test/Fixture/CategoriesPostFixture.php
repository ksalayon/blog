<?php
/**
 * CategoriesPostFixture
 *
 */
class CategoriesPostFixture extends CakeTestFixture {

	public $import = array('connection' => 'test');
/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'category_id' => array('type' => 'integer', 'null' => true, 'default' => '0', 'key' => 'index'),
		'post_id' => array('type' => 'integer', 'null' => true, 'default' => '0'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'category_id' => array('column' => 'category_id', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		/*array(
			'id' => '1',
			'category_id' => '6',
			'post_id' => '1',
			'created' => null
		),**/
		array(
			'id' => '2',
			'category_id' => '1',
			'post_id' => '1',
			'created' => null
		),
		array(
			'id' => '3',
			'category_id' => '1',
			'post_id' => '2',
			'created' => null
		),
			
	);

}
