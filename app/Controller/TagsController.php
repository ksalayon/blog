<?php
App::uses('AppController', 'Controller');
/**
 * Tags Controller
 *
 * @property Tag $Tag
 * @property PaginatorComponent $Paginator
 */
class TagsController extends AppController {

public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('view');
    }
var $helpers = array('Html', 'Form');

public $components = array('Paginator');

 

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Tag->exists($id)) {
			throw new NotFoundException(__('Invalid tag'));
		}
		
		$this->Tag->recursive = 0;
		
		$tag = $this->Tag->findById($id);

	    $this->Tag->Post->bindModel(array('hasOne' => array('PostsTag')), false);
		
	    $paginationConfig = array(
	        'limit' => 2,
	        'conditions' => array('PostsTag.tag_id' => $id),
	        'contain' => array(
				'PostsTag'
			)
	    );
		
		
		$this->Paginator->settings = $paginationConfig;

		$posts = $this->Paginator->paginate('Post');

		//pr($tag);
		
		//pr($posts);
		
		$this->set(compact('tag', 'posts'));

	}
	
	
	public function public_view($id = null) {
		if (!$this->Tag->exists($id)) {
			throw new NotFoundException(__('Invalid tag'));
		}
		$options = array('conditions' => array('Tag.' . $this->Tag->primaryKey => $id));
		$this->set('tag', $this->Tag->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Tag->create();
			if ($this->Tag->save($this->request->data)) {
				$this->Session->setFlash(__('The tag has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tag could not be saved. Please, try again.'));
			}
		}
		$posts = $this->Tag->Post->find('list');
		$this->set(compact('posts'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Tag->exists($id)) {
			throw new NotFoundException(__('Invalid tag'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Tag->save($this->request->data)) {
				$this->Session->setFlash(__('The tag has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tag could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Tag.' . $this->Tag->primaryKey => $id));
			$this->request->data = $this->Tag->find('first', $options);
		}
		$posts = $this->Tag->Post->find('list');
		$this->set(compact('posts'));
	}

	public function get_tags($limit = 100)
	{
		$containableConfig = array(
			'Post' => array(
				'order' => array('Post.created DESC'),
				'limit' => 100
			)
		);
		
		$this->Tag->contain($containableConfig);
		$this->Tag->recursive = 0;
		$result = $this->Tag->find('all');
		
		return $result;
	}
/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Tag->id = $id;
		if (!$this->Tag->exists()) {
			throw new NotFoundException(__('Invalid tag'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Tag->delete()) {
			$this->Session->setFlash(__('The tag has been deleted.'));
		} else {
			$this->Session->setFlash(__('The tag could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

	public function get_list()
	{
		$this->RequestHandler->setContent('json', 'application/json' );
        $result = $this->Tag->find('list');
        $this->set('result', $result); 	
        $this->set('_serialize', array('result'));
    }
}
