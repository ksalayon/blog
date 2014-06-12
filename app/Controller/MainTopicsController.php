<?php
App::uses('AppController', 'Controller');
/**
 * MainTopics Controller
 *
 * @property MainTopic $MainTopic
 * @property PaginatorComponent $Paginator
 */
class MainTopicsController extends AppController {

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
		$this->MainTopic->recursive = 0;
		$this->set('mainTopics', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->MainTopic->exists($id)) {
			throw new NotFoundException(__('Invalid main topic'));
		}
		$options = array('conditions' => array('MainTopic.' . $this->MainTopic->primaryKey => $id));
		$this->set('mainTopic', $this->MainTopic->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->MainTopic->create();
			if ($this->MainTopic->save($this->request->data)) {
				$this->Session->setFlash(__('The main topic has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The main topic could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->MainTopic->exists($id)) {
			throw new NotFoundException(__('Invalid main topic'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->MainTopic->save($this->request->data)) {
				$this->Session->setFlash(__('The main topic has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The main topic could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('MainTopic.' . $this->MainTopic->primaryKey => $id));
			$this->request->data = $this->MainTopic->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->MainTopic->id = $id;
		if (!$this->MainTopic->exists()) {
			throw new NotFoundException(__('Invalid main topic'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->MainTopic->delete()) {
			$this->Session->setFlash(__('The main topic has been deleted.'));
		} else {
			$this->Session->setFlash(__('The main topic could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
