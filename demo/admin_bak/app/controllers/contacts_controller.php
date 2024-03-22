<?php
class contactsController extends AppController {

	var $name = 'Contacts';
	function add() {
		//debug($this->data);
		if (!empty($this->data)) {
			$this->Contact->create();
			if ($this->Contact->save($this->data)) {
				$this->Session->setFlash(__('Thank you for your interest. Your contact has been received. Someone from our team
will contact you shortly.', true));
				$data['data']['username']=$this->data['Contact']['email'];
				$data['data']['formname']='Contact Form';
				$data['data']['message']='You have a new lead';
				$this->__mailToAdmin($data);
				$this->__mailToUser($data);
				$this->redirect(array('controller'=>'home'));
			} else {
				$this->Session->setFlash(__('The Contact could not be saved. Please, try again.', true));
			}
		}
	}
	function __mailToAdmin($data){
			$content = $data;
			$options['from'] =CONFIG_ADMIN_MAIL;
			$options['to'] = CONFIG_ADMIN_FROM_MAIL;
			$options['subject'] = $data['data']['formname'];
			$options['contentTemplate'] = REQUEST_MAIL_TO_ADMIN;
			$options['content'] =$content;
			$this->Mymail->sendEmail($options);
		}
		
		function __mailToUser( $data){
			 $content = $data;
			$options['from'] =CONFIG_ADMIN_MAIL;
			$options['to'] =$data['data']['username'];
			$options['subject'] =$data['data']['formname'];
			$options['contentTemplate'] = REQUEST_MAIL_TO_USER;
			$options['content'] =$content;
			$this->Mymail->sendEmail($options); 
		}
	function admin_index() {
		$this->Redirect->urlToNamed();
		$conditions=$this->Search->getConditions();
		$this->Contact->recursive = 0;
		$this->set('contacts', $this->paginate(NULL,$conditions));
	}
	
	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid contact', true));
			$this->redirect(array('action' => 'index'));
			
		}
		
		if (!empty($this->data)) {		
			if ($this->Contact->save($this->data)) {
				$this->Session->setFlash(__('The contact has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The contact could not be saved. Please, try again.', true));
			}
		}
		
		if (empty($this->data)) {
			$this->data = $this->Contact->find('first',array('conditions'=>array('Contact.id'=>$id)));

		}
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for contact', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Contact->delete($id)) {
			$this->Session->setFlash(__('Contact deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Contact was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}

}
