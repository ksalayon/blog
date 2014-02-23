<?php
/**
 * PostFixture
 *
 */
class PostFixture extends CakeTestFixture {

	public $import = array('connection' => 'test');
/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'primary'),
		'title' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'body' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
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
			'title' => 'The title',
			'body' => 'testing',
			'created' => '2013-11-22 10:32:57',
			'modified' => '2013-11-21 23:25:01'
		),
		array(
			'id' => '2',
			'title' => 'A title once again',
			'body' => 'And the post body follows.',
			'created' => '2013-11-22 10:32:57',
			'modified' => '2013-11-21 23:26:45'
		),
		array(
			'id' => '3',
			'title' => 'Title strikes back',
			'body' => 'This is really exciting! Not.',
			'created' => '2013-11-22 10:32:57',
			'modified' => null
		),
		array(
			'id' => '4',
			'title' => 'Jack',
			'body' => 'This is an apocalypse warning!',
			'created' => '2013-11-28 00:28:06',
			'modified' => '2013-11-28 00:28:06'
		),
		array(
			'id' => '5',
			'title' => 'testing',
			'body' => 'sadasdasdasd',
			'created' => '2013-11-28 01:23:11',
			'modified' => '2013-11-28 01:23:11'
		),
	);

}
