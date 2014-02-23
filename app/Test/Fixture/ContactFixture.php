<?php
/**
 * ContactFixture
 *
 */
class ContactFixture extends CakeTestFixture {

	public $import = array('connection' => 'test');
/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'email' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'subject' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'message' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => '0000-00-00 00:00:00'),
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
			'id' => '37',
			'email' => 'asdasd',
			'subject' => 'asda',
			'message' => 'fasfa',
			'created' => '0000-00-00 00:00:00'
		),
		array(
			'id' => '38',
			'email' => 'kin@immagine.co.nz',
			'subject' => '',
			'message' => 'Lorem ipsum dasdfasdfasdf',
			'created' => '0000-00-00 00:00:00'
		),
		array(
			'id' => '39',
			'email' => 'asdasda@nkasfnas.com',
			'subject' => '',
			'message' => 'asdasda',
			'created' => '0000-00-00 00:00:00'
		),
		array(
			'id' => '40',
			'email' => 'Newentry@test.com',
			'subject' => '',
			'message' => 'knanf.kas',
			'created' => '0000-00-00 00:00:00'
		),
		array(
			'id' => '41',
			'email' => 'jack@testing.com',
			'subject' => '',
			'message' => 'hjbfjhabyuasbasbasbasbfa',
			'created' => '0000-00-00 00:00:00'
		),
		array(
			'id' => '42',
			'email' => 'njkasnjkasnf@jfank.com',
			'subject' => '',
			'message' => 'bykasfasf',
			'created' => '0000-00-00 00:00:00'
		),
		array(
			'id' => '43',
			'email' => 'jack@jack.jack',
			'subject' => '',
			'message' => 'fasfasf',
			'created' => '0000-00-00 00:00:00'
		),
		array(
			'id' => '44',
			'email' => 'testing@gmail.com',
			'subject' => '',
			'message' => 'MESSAGE TEST',
			'created' => '0000-00-00 00:00:00'
		),
		array(
			'id' => '45',
			'email' => 'vhasdh@bhabfa.com',
			'subject' => 'hbfkafky',
			'message' => 'kbaybfa',
			'created' => '0000-00-00 00:00:00'
		),
	);

}
