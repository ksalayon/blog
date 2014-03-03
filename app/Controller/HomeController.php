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
App::uses('CakeEmail', 'Network/Email', 'AppController', 'Controller');

/**
 * Static content controller
 *
 * Override this controller by placing a copy in controllers directory of an application
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers/pages-controller.html
 */
class HomeController extends AppController {


 public $helpers = array('Blog', 'Html', 'Form', 'Session');

	
	public function beforeFilter() {
		parent::beforeFilter();
		$this->logdebug('Home beofre filter');
        $this->Auth->allow();
    }

	


/**
 * This controller does not use a model
 *
 * @var array
 */
	public $uses = array('Contact');

/**
 * Displays a view
 *
 * @param mixed What page to display
 * @return void
 * @throws NotFoundException When the view file could not be found
 *	or MissingViewException in debug mode.
 */
 
 	
	
	public function display() {
		$this->layout = 'home';
		
		/**$path = func_get_args();

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
		}**/
	}
	

		
	public function contact()
	{
		
		
		 //post, get, put, delete
		 if ($this->request->is('post')) {
		 	$this->logdebug($this->request->data);
            $this->Contact->create();
            if ($this->Contact->save($this->request->data)) {
                $this->Session->setFlash(__('Your contact has been saved.'));
				
				/** **/
				//Email code goes here
				$Email = new CakeEmail();
				$Email->config('gmail');
				$Email->emailFormat('html');
				$Email->to('jackmacleod78@gmail.com'); //replace with your gmail account				
				$Email->replyTo($this->request->data['Contact']['email']); //replace with your gmail account				
				$Email->from($this->request->data['Contact']['email']); //replace with your gmail account				
				$Email->subject($this->request->data['Contact']['subject']);			
				$Email->send($this->request->data['Contact']['message']);
				/** **/
				
                //return $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash(__('Unable to save your contact.'));
        }
		 
	}

	public function portfolio()
	{
		
	}
	
	function __test()
	{
		echo 'Invoke private function';
	}
}
