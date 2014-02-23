<?php
/**
 * CategoryFixture
 *
 */
class CategoryFixture extends CakeTestFixture {

	//force connection to test DB
	public $import = array('connection' => 'test');
/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'title' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'description' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => '1',
			'title' => 'World',
			'description' => null,
			'created' => null
		),
		array(
			'id' => '2',
			'title' => 'Politics',
			'description' => null,
			'created' => null
		),
		array(
			'id' => '3',
			'title' => 'Sport',
			'description' => null,
			'created' => null
		),
		array(
			'id' => '4',
			'title' => 'Living',
			'description' => null,
			'created' => null
		),
	);

}
