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
class ContactsController extends AppController {


 public $helpers = array('Html', 'Form');

	public function index() {
         $this->set('contacts', $this->Contact->find('all'));
    }

    public function view($id = null) {
        if (!$id) {
            throw new NotFoundException(__('Invalid contact'));
        }

        $contact = $this->Contact->findById($id);
        if (!$contact) {
            throw new NotFoundException(__('Invalid contact'));
        }
        $this->set('contact', $contact);
    }
	  public function add() {
	  		 $this->autoRender=false;
			 
	        if ($this->request->is('contact')) {
	            $this->Contact->create();
	            if ($this->Contact->save($this->request->data)) {
	                $this->Session->setFlash(__('Your contact has been saved.'));
	                //return $this->redirect(array('action' => 'index'));
	                

	            }
				else
				{
					$this->Contact->validationErrors;
				}
	            $this->Session->setFlash(__('Unable to add your contact.'));
	        }
			
			return $this->redirect(array('controller' => 'home', 'action' => 'contact'));
	}
	  
	  public function edit($id = null) {
    if (!$id) {
        throw new NotFoundException(__('Invalid contact'));
    }
    $contact = $this->Contact->findById($id);
    if (!$contact) {
        throw new NotFoundException(__('Invalid contact'));
    }
    if ($this->request->is(array('contact', 'put'))) {
        $this->Contact->id = $id;
        if ($this->Contact->save($this->request->data)) {
            $this->Session->setFlash(__('Your contact has been updated.'));
            return $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Unable to update your contact.'));
    }

    if (!$this->request->data) {
        $this->request->data = $contact;
    }
}
	  public function delete($id) {
    if ($this->request->is('get')) {
        throw new MethodNotAllowedException();
    }

    if ($this->Contact->delete($id)) {
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
}
