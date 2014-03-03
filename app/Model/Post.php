<?php
/**
 * Application model for CakePHP.
 *
 * This file is application-wide model file. You can put all
 * application-wide model-related methods here.
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Model
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('Model', 'Model');

/**
 * Application model for Cake.
 *
 * Add your application-wide methods in the class below, your models
 * will inherit them.
 *
 * @package       post.Model
 */
class Post extends Model {
	
	public function isOwnedBy($post, $user) {
    return $this->field('id', array('id' => $post, 'user_id' => $user)) === $post;
}
	
	public $actsAs = array('Containable');
	
	public $validate = array(
		'title' => array(
			'rule' => 'notEmpty'
		),
		'body' => array(
			'rule' => 'notEmpty'
			
			)
	);
	
	public $hasAndBelongsToMany = array(
		
		'Tag' => array(
            'className' => 'Tag',
            'joinTable' => 'posts_tags',
            'foreignKey' => 'post_id',
            'associationForeignKey' => 'tag_id',
            'unique' => 'keepExisting',
            'conditions' => '',
            'fields' => '',
            'order' => '',
            'limit' => '',
            'offset' => '',
            'finderQuery' => '',
            'deleteQuery' => '',
            'insertQuery' => ''
        )
	);
	
	public $hasMany = array(
        'Comment' => array(
            'className' => 'Comment',
            'foreignKey' => 'post_id',
            'order' => 'Comment.created DESC'
        )
    );
	
	
    public $belongsTo = array(
    
        'Category' => array(
            'className' => 'Category',
            'foreignKey' => 'category_id'
        )
    );
	public function getLatest($limit = 3)
	{
		$latestPost = $this->find('all', array('order' => array('Post.created DESC'), 'limit' => $limit));
		return $latestPost;
	}

	function getLastQuery($complete = false) {

              $dbo = $this->getDatasource();

              $logs = $dbo->getLog();

              $lastLog = end($logs['log']);

              if($complete == true)

              {

                     return $logs;

              }

              else

              {

                     return $lastLog['query'];

              }

       }


}

	
