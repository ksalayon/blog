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
class PagesController extends AppController {

/**
 * This controller does not use a model
 *
 * @var array
 */
    
    public $name = 'Pages';
    
    public function beforeFilter() {
        $this->logdebug('Pagesontroller beforeFilter');
        parent::beforeFilter();
        $this->Auth->allow('home' , 'contact', 'portfolio', 'manual');
    }
    
/**
 * Displays a view
 *
 * @param mixed What page to display
 * @return void
 * @throws NotFoundException When the view file could not be found
 *	or MissingViewException in debug mode.
 */
	public function home()
    {
        $this->layout = 'home';
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
    
	public function manual()
	{
		$this->layout = 'manual';
	}
	
    function __test()
    {
        echo 'Invoke private function';
    }
}
