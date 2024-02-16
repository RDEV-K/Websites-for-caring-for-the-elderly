<?php
	class HomeController extends AppController {
		var $name = 'home';
		var $uses = NULL;
		function index(){
			$this->loadModel('Blog');
			$this->paginate['Blog']=array('conditions'=>array('active'=>1),'order'=>'Blog.date desc','limit'=>5);
			$blogData=$this->paginate('Blog');
			$this->loadModel('Event');
			$eventData=$this->Event->find('all',array('conditions'=>array('event_date'=>date("Y-m-d"),'active'=>1),'limit'=>5,'order'=>'Event.start_time desc'));
			$this->set(compact('blogData','eventData'));
		}
	}
?>