<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2010, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2010, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       cake
 * @subpackage    cake.app
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package       cake
 * @subpackage    cake.app
 */
class AppController extends Controller{
	var $layout = 'admin_layout';
	var $helpers = array('Javascript','Session','Html', 'Nav','Form','Fck','Csv','Status','DatePicker');
	var $paginate = array('limit' => 10);
	var $components = array('Search','Mymail','Redirect','Session','Auth','Cookie');
	
	function beforeFilter() {
		//debug($this->Auth->password('admin'));exit;
        if(!empty($this->params['admin'])) {
	        $this->Auth->loginAction = array('controller'=>'users', 'action'=>'login','admin'=>1);
	        $this->Auth->loginRedirect = array('controller'=>'requests', 'action'=>'index','admin'=>1);
	        $this->Auth->logoutRedirect = array('controller'=>'users', 'action'=>'login','admin'=>1);
			//$this->Auth->allow('*');
        } else {
            $this->Auth->allow('*');
			$this->layout='layout';
        }
    }
	
	// For delete a mupltiple record
	function admin_delete_multiple($id = null){
        $ids = array();
        foreach($this->data[$this->modelClass] as $record) {
			if($record != 0)
				$this->{$this->modelClass}->delete($record);
	}
	$this->redirect($this->referer());
    }
	
	// For change Status Of a Record
	function admin_toggleStatus($id , $status){
		$this->{$this->modelClass}->id = $id;
		$this->{$this->modelClass}->saveField('active' , $status);
		$this->redirect($this->referer());
	}

	function toggleStatus($id , $status){
		$this->admin_toggleStatus($id, $status);
	}
	
}
?>