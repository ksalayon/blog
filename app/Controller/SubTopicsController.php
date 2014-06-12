<?php
App::uses('AppController', 'Controller');
/**
 * SubTopics Controller
 *
 * @property SubTopic $SubTopic
 * @property PaginatorComponent $Paginator
 */
class SubTopicsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->SubTopic->recursive = 0;
		$this->set('subTopics', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->SubTopic->exists($id)) {
			throw new NotFoundException(__('Invalid sub topic'));
		}
		$options = array('conditions' => array('SubTopic.' . $this->SubTopic->primaryKey => $id));
		$this->set('subTopic', $this->SubTopic->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->SubTopic->create();
			if ($this->SubTopic->save($this->request->data)) {
				$this->Session->setFlash(__('The sub topic has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sub topic could not be saved. Please, try again.'));
			}
		}
		$mainTopics = $this->SubTopic->MainTopic->find('list');
		$this->set(compact('mainTopics'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->SubTopic->exists($id)) {
			throw new NotFoundException(__('Invalid sub topic'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->SubTopic->save($this->request->data)) {
				$this->Session->setFlash(__('The sub topic has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sub topic could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('SubTopic.' . $this->SubTopic->primaryKey => $id));
			$this->request->data = $this->SubTopic->find('first', $options);
		}
		$mainTopics = $this->SubTopic->MainTopic->find('list');
		$this->set(compact('mainTopics'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->SubTopic->id = $id;
		if (!$this->SubTopic->exists()) {
			throw new NotFoundException(__('Invalid sub topic'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->SubTopic->delete()) {
			$this->Session->setFlash(__('The sub topic has been deleted.'));
		} else {
			$this->Session->setFlash(__('The sub topic could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
