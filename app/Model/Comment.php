<?php
App::uses('AppModel', 'Model');
/**
 * Comment Model
 *
 * @property Post $Post
 */
class Comment extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
 

public $validate = array(
		'name' => array(
			'rule' => 'notEmpty',
			'required' => true
		),
		'comment' => array(
			'rule' => 'notEmpty',
			'required' => true
			
		),
		'emailAddress' => array(
			'rule' => 'notEmpty',
			'required' => true
	)
);
	public $belongsTo = array(
		'Post' => array(
			'className' => 'Post',
			'foreignKey' => 'post_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
