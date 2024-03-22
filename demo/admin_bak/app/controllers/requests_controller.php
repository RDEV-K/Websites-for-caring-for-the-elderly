<?php
class RequestsController extends AppController {

	var $name = 'Requests';

	var $residentLivesOptions = array(
		'Family',
		'Facility',
		'Hospital',
		'Independent',
	);

	var $residentHasOptions = array(
		'Medicare',
		'Medicaid',
		'Other Insurance',
	);

	function index() {		
		$this->Request->recursive = 0;
		$this->set('requests', $this->paginate());
	}
	
	function add() {
		if (!empty($this->data)) {
			$this->Request->create();
			if ($this->Request->save($this->data)) {
				$this->Session->setFlash(__('Thank you for your interest. Your request has been received. Someone from our team
will contact you shortly.', true), 'flash_thanks');
				$data['data']['username']=$this->data['Request']['email'];
				$data['data']['formname']='Request Form';
				$data['data']['message']='You have a new lead';
				$this->__mailToAdmin($data);
				$this->__mailToUser($data);
				$this->redirect(array('action'=>'message'));
			} else {
				$this->Session->setFlash(__('The Request could not be saved. Please, try again.', true), 'flash_error');
			}
		}

		$this->set('residentHasOptions', $this->residentHasOptions);
		$this->set('residentLivesOptions', $this->residentLivesOptions);
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
		$this->Request->recursive = 0;
		$this->set('requests', $this->paginate(NULL,$conditions));
	}
	function message() {
	
	}
	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid request', true));
			$this->redirect(array('action' => 'index'));
			
		}
		if (!empty($this->data)) {		
			if ($this->Request->save($this->data)) {
				$this->Session->setFlash(__('The request has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The request could not be saved. Please, try again.', true));
			}
		}
		
		if (empty($this->data)) {
			$this->data = $this->Request->find('first',array('conditions'=>array('Request.id'=>$id)));
		}

		$this->set('residentHasOptions', $this->residentHasOptions);
		$this->set('residentLivesOptions', $this->residentLivesOptions);
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for request', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Request->delete($id)) {
			$this->Session->setFlash(__('Request deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Request was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}

}
