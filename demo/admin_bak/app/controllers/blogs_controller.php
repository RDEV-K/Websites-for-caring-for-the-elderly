<?php
class BlogsController extends AppController {
	var $name = 'Blogs';
	function admin_add() {
		if (!empty($this->data)) {
			$this->Blog->create();
			if ($this->Blog->save($this->data)) {
				$this->Session->setFlash(__('The blog has been saved', true));
				$this->redirect(array('action'=>'admin_index'));
			} else {
				$this->Session->setFlash(__('The Blog could not be saved. Please, try again.', true));
			}
		}
	}
	function admin_index() {
		$this->Redirect->urlToNamed();
		$conditions=$this->Search->getConditions();
		$this->Blog->recursive = 0;
		$this->set('blogs', $this->paginate(NULL,$conditions));
	}
	
	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid blog', true));
			$this->redirect(array('action' => 'index'));
			
		}
		if (!empty($this->data)) {		
			if ($this->Blog->save($this->data)) {
				$this->Session->setFlash(__('The blog has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The blog could not be saved. Please, try again.', true));
			}
		}
		
		if (empty($this->data)) {
			$this->data = $this->Blog->find('first',array('conditions'=>array('Blog.id'=>$id)));

		}
	}
}
?>