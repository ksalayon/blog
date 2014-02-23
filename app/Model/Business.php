<?php
App::uses('AppModel', 'Model');
/**
 * Business Model
 *
 */
class Business extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'business';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'title';

}
