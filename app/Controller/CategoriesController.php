<?php
/**
 * Static content controller.
 *
 * This file will render views from views/pages/
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
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
App::uses('AppController', 'Controller');

/**
 * Static content controller
 *
 * Override this controller by placing a copy in controllers directory of an application
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers/pages-controller.html
 */
class CategoriesController extends AppController {


	public $helpers = array('Html', 'Form');
	
	public $components = array('Paginator');

	public function index() {
		 
		 $paginationConfig = array(
	        'limit' => 10,
	    );
		
		$this->Paginator->settings = $paginationConfig;
		
		$category = $this->Paginator->paginate('Category');
		
         $this->set('categories', $category);
    }

    public function view($id = null) {
        if (!$id) {
            throw new NotFoundException(__('Invalid Category'));
        }
		
		//$category = $this->Category->read(null, $id);

		
		//$this->Category->contain($containbaleConfig);
		
		//$category = $this->Category->findById($id);
		$this->Category->recursive = 0;
		
		//main Category info
		$category = $this->Category->findById($id);
		
		
		
		$paginationConfig = array(
	        'limit' => 2,
	        'conditions' => array('Category.id' => $id)
	    );
		
		$this->Paginator->settings = $paginationConfig;
		
		$posts = $this->Paginator->paginate('Post');


		$this->set(compact('posts', 'category'));


    }
	 
	 public function add() {
  		 $this->autoRender=false;
		 
        if ($this->request->is('category')) {
            $this->Category->create();
            if ($this->Category->save($this->request->data)) {
                $this->Session->setFlash(__('Your Category has been saved.'));
            }
			else
			{
				$this->Category->validationErrors;
			}
            $this->Session->setFlash(__('Unable to add your Category.'));
        }
		
		return $this->redirect(array('controller' => 'home', 'action' => 'Category'));
	}
	  
	public function edit($id = null) {
		
	    if (!$id) {
	        throw new NotFoundException(__('Invalid Category'));
	    }
	    $Category = $this->Category->findById($id);
	    if (!$contact) {
	        throw new NotFoundException(__('Invalid Category'));
	    }
	    if ($this->request->is(array('contact', 'put'))) {
	        $this->Category->id = $id;
	        if ($this->Category->save($this->request->data)) {
	            $this->Session->setFlash(__('Your Category has been updated.'));
	            return $this->redirect(array('action' => 'index'));
	        }
	        $this->Session->setFlash(__('Unable to update your Category.'));
	    }
	
	    if (!$this->request->data) {
	        $this->request->data = $Category;
	    }
	}
	
	public function delete($id) {
	    if ($this->request->is('get')) {
	        throw new MethodNotAllowedException();
	    }
	
	    if ($this->Category->delete($id)) {
	        $this->Session->setFlash(__('The post with id: %s has been deleted.', h($id)));
	        return $this->redirect(array('action' => 'index'));
	    }
	}

	public function get_categories_and_latest_post($limit = 4)
	{
		$containbaleConfig = array(
			'Post' => array(
				'order' => array('Post.created DESC'),
				'limit' => 1,
				'Tag',
				'Comment'
			)
		);
		
		$this->Category->contain($containbaleConfig);
		$this->Category->recursive = 0;
		$result = $this->Category->find('all');
		
		$this->logdebug($result, 'latest post result');
		return $result;
	}

}