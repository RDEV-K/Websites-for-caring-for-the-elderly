<?php
class UsersController extends AppController {

	
	var $name = 'Users';
	var $layout = 'admin_login_layout';
	function admin_login() {
		
	}
	
	function admin_logout() {
		$this->redirect($this->Auth->logout());
	}

	function admin_change_password(){
			$this->layout='admin_layout';
			 if(!empty($this->data)){
			 $cansave = true;
			 $user = $this->User->findByUsername($this->Auth->user('username'));
			 
			 if($user && $user['User']['password'] != $this->Auth->password($this->data['User']['old_password']) ){
				 $this->User->validationErrors['old_password'] = 'Password is incorrect';
				 $cansave = false;
			 }
			 if($this->data['User']['new_password'] != $this->data['User']['confirm_password']){
				 $this->User->validationErrors['confirm_password'] = "Password didn't match";
				 $cansave = false;
			 }
			 if($cansave){
				 $user['User']['password' ] = $this->Auth->password($this->data['User']['new_password']);
				 if($this->User->save($user)){
					 $this->redirect(array('action' => 'index'));
					 $this->Session->setFlash(__('Password is changed successfully' , true));					
				 }else{
					 $this->Session->setFlash(__("password could not be changed",true));
				 }
			 }		
		 }
	 }
}
