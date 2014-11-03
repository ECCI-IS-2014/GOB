<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
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

// app/Controller/AppController.php
class AppController extends Controller {
    //...
	public function beforeFilter() {
        $this->Auth->allow('index', 'view', 'home','searchInfo','add','update','searchAdd');
        $this->set('authUser', $this->Auth->user());
		$this->loadModel('Cart');
		$this->set('count',$this->Cart->getCount());
        $this->set('authUser', $this->Auth->user());
    }
	
	public $components = array(
        'Session','DebugKit.Toolbar','DependentSelectBox',
        'Auth' => array(
            'loginRedirect' => array('controller' => 'pages', 'action' => 'display', 'home'),
            'logoutRedirect' => array('controller' => 'pages', 'action' => 'display', 'home'),
            'authorize' => array('Controller'), // Added this line
            'authenticate' => array(
                'Form' => array(
                    'passwordHasher' => 'Blowfish'
                )
            )
        )
    );
	
	
	
	
    public function isAuthorized($user) {
        // Admin can access every action
        if (isset($user['role']) && $user['role'] === 'admin') {
            return true;
        }
        // Default deny
        return false;
    }
    //...

    public 	$ops = array(
        'Category' => array(
            'parentClass'=>null,
            'foreignKey' => null,
            //'fields'=>array('other_field'),
            'conditions'=>null,
            'childClass'=>'Subcategory',
            'update'=>array('Subcategory','Subsubcategory')
        ),
        'Subcategory'=>array(
            'parentClass'=>'Category',
            'foreignKey' => 'category_id',
            //'fields'=>array('other_field'),
            'conditions'=>null,
            'childClass'=>'Subsubcategory',
            'update'=>array('Subsubcategory')
        ),
        'Subsubcategory'=>array(
            'parentClass'=>'Subcategory',
            'foreignKey' => 'subcategory_id',
            'conditions'=> null,
            'childClass'=>null
        )

    );

    public function selectorDependiente($thisConfig,$currentModel=null){
        if($this->request->is('post')){
            $request = $this->request->data;
        }else{
            $request = $this->request->query;
        }

        if(!$currentModel){
            $currentModel = Inflector::classify(Inflector::singularize($this->request->params['controller']));
        }

        $selector = $this->DependentSelectBox->newSimpleSelect($this->{$thisConfig},$request,false,$currentModel);
        return $selector;
    }
}
