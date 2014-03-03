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
class PostsController extends AppController {


 public $helpers = array('Html', 'Form');

	public function index() {
         $this->set('posts', $this->Post->find('all'));
    }

    public function view($id = null) {
    	
        if (!$id) {
            throw new NotFoundException(__('Invalid post'));
        }

		if(!empty($this->request->data))
		{
			if(!$this->Post->Comment->save($this->request->data))
			{
				
				$this->Session->setFlash(__('Comment was not submitted.'));
			}
			else
			{
				unset($this->request->data['Comment']);
				return $this->redirect(array('action' => 'view/' . $id));
				$this->Session->setFlash(__('Comment posted successfully.'));
			}
		}
		
		$post = $this->Post->findById($id);
		if (!$post) {
            throw new NotFoundException(__('Invalid post'));
        }
		
        $this->set('post', $post);

    }

	public function edit($id = null) {
		$this->layout = 'post';
	    if (!$id) {
	        throw new NotFoundException(__('Invalid post'));
	    }
	    $post = $this->Post->findById($id);
	    if (!$post) {
	        throw new NotFoundException(__('Invalid post'));
	    }
	    if ($this->request->is(array('post', 'put'))) {
	        $this->Post->id = $id;
			
			pr($this->request->data);
	        if ($this->Post->save($this->request->data)) {
	            $this->Session->setFlash(__('Your post has been updated.'));
	            //return $this->redirect(array('action' => 'index'));
	        }
	        $this->Session->setFlash(__('Unable to update your post.'));
	    }
	
	    if (!$this->request->data) {
	        $this->request->data = $post;
	    }
		
		$categories = $this->Post->Category->find('list');
		$tags = $this->Post->Tag->find('list');
		$this->set(compact('categories', 'tags'));
	}
	
	public function delete($id) {
	    if ($this->request->is('get')) {
	        throw new MethodNotAllowedException();
	    }
	
	    if ($this->Post->delete($id)) {
	        $this->Session->setFlash(__('The post with id: %s has been deleted.', h($id)));
	        return $this->redirect(array('action' => 'index'));
	    }
	}
/**
 * This controller does not use a model
 *
 * @var array
 */
	public $uses = array();

/**
 * Displays a view
 *
 * @param mixed What page to display
 * @return void
 * @throws NotFoundException When the view file could not be found
 *	or MissingViewException in debug mode.
 */
	public function display() {
		$path = func_get_args();

		$count = count($path);
		if (!$count) {
			return $this->redirect('/');
		}
		$page = $subpage = $title_for_layout = null;

		if (!empty($path[0])) {
			$page = $path[0];
		}
		if (!empty($path[1])) {
			$subpage = $path[1];
		}
		if (!empty($path[$count - 1])) {
			$title_for_layout = Inflector::humanize($path[$count - 1]);
		}
		$this->set(compact('page', 'subpage', 'title_for_layout'));

		try {
			$this->render(implode('/', $path));
		} catch (MissingViewException $e) {
			if (Configure::read('debug')) {
				throw $e;
			}
			throw new NotFoundException();
		}
	}
	public function isNotAuthorized($user) {
		// All registered users can add posts
	    if ($this->action === 'home') {
	        return true;
	    }
	
	    // The owner of a post can edit and delete it
	    if (in_array($this->action, array('edit', 'delete'))) {
	        $postId = $this->request->params['pass'][0];
	        if ($this->Post->isOwnedBy($postId, $user['id'])) {
	            return true;
	        }
	    }
	
	    return parent::isNotAuthorized($user);
	}
		
	public function isAuthorized($user) {
	    // All registered users can add posts
	    if ($this->action === 'add') {
	        return true;
	    }
	
	    // The owner of a post can edit and delete it
	    if (in_array($this->action, array('edit', 'delete'))) {
	        $postId = $this->request->params['pass'][0];
	        if ($this->Post->isOwnedBy($postId, $user['id'])) {
	            return true;
	        }
	    }
	
	    return parent::isAuthorized($user);
	}
	
    function add()
    {
    	if ($this->request->is('post')) {
        //Added this line
        $this->request->data['Post']['user_id'] = $this->Auth->user('id');
        if ($this->Post->save($this->request->data)) {
            $this->Session->setFlash(__('Your post has been saved.'));
            return $this->redirect(array('action' => 'index'));
        }
    }

		if ($this->request->is('post')) {
			
			$filename = null;

	        if (!empty($this->request->data['Post']['featured_image']['tmp_name'])
	
	            && is_uploaded_file($this->request->data['Post']['featured_image']['tmp_name'])) {
	
	            $filename = basename($this->request->data['Post']['featured_image']['name']);
	
	            move_uploaded_file( $this->data['Post']['featured_image']['tmp_name'], WWW_ROOT . DS . 'files' . DS . 'featured_images' . DS . $filename);
				}
	
	        // Set the file-name only to save in the database
	
	        $this->request->data['Post']['featured_image'] = $filename;
			
            $this->Post->create();
			
			$this->logdebug($this->request->data, ' New POst Data');
            if ($this->Post->save($this->request->data)) {
                $this->Session->setFlash(__('Your postz has been saved.'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash(__('Unable to add your post.'));
        }

		$categories = $this->Post->Category->find('list');
		$tags = $this->Post->Tag->find('list');
		$this->set(compact('categories', 'tags'));
		
    }
	
	public function get_latest_post($limit = 4)
	{
		$posts = $this->Post->getLatest($limit);
		return $posts;
	}

}
