<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
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
App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {
	
    public $helpers = array('Blog', 'Html', 'Form', 'Session');
     
	var $components = array('RequestHandler', 'Session',
        'Auth' => array(
            'loginAction' => array(
                'controller' => 'users',
                'action' => 'login'
            ),
            'loginRedirect' => array(
                'controller' => 'posts',
                'action' => 'index'
            ),
            'logoutRedirect' => array(
                'controller' => 'users',
                'action' => 'login'
            ),
            'authorize' => array('Controller')
        )
    );
	
	public function beforeFilter() {
	    
        $this->Auth->allow('home');
    }

	public function isAuthorized($user) {
	    
        $this->logdebug($user, 'Is Authorized User at AppController');
        // Admin can access every action
        if (isset($user['role']) && $user['role'] === 'admin') {
            return true;
        }
    
        // Default deny
        return false;
    }


	public function logdebug($data, $message = null, $file = 'CRMLOG')
    {
        if(is_string($data) || is_numeric($data))
        {
            if($message != null)
            {
                $this->log($message . ' : ' . $data, $file);
            }
            else
            {
                $this->log($data, $file);
            }
            
        }
        else
        {
            if($message != null)
            {
                $this->log($message, $file);
            }
            
            $this->log($data, $file);
        }
        
    }
}
