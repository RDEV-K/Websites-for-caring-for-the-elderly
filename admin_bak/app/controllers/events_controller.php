<?php
class EventsController extends AppController {
	var $name = 'Events';
	function beforeFilter() {
		$this->Auth->allow('nextevents');
    }
	
	function admin_add() {
		if (!empty($this->data)) {
			$this->Event->create();
			if ($this->Event->save($this->data)) {
				$this->Session->setFlash(__('The event has been saved', true));
				$this->redirect(array('action'=>'admin_index'));
			} else {
				$this->Session->setFlash(__('The Event could not be saved. Please, try again.', true));
			}
		}
	}
	function admin_index() {
		$this->Redirect->urlToNamed();
		$conditions=$this->Search->getConditions();
		$this->Event->recursive = 0;
		$this->set('events', $this->paginate(NULL,$conditions));
	}
	
	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid event', true));
			$this->redirect(array('action' => 'index'));
			
		}
		if (!empty($this->data)) {		
			if ($this->Event->save($this->data)) {
				$this->Session->setFlash(__('The event has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The event could not be saved. Please, try again.', true));
			}
		}
		
		if (empty($this->data)) {
			$this->data = $this->Event->find('first',array('conditions'=>array('Event.id'=>$id)));

		}
	}
	function nextevents(){
	$this->layout='layout';
		$start_date = date("Y-m-d");
		$datesixMonthAdded = strtotime(date("Y-m-d", strtotime($start_date)). "+6 month");
		$end_date=date('Y-m-d', $datesixMonthAdded);
		$this->paginate['Event']=array('conditions'=>array('Event.event_date BETWEEN ? AND ?'=>array($start_date,$end_date),'Event.active'=>1),'order'=>'Event.event_date desc','limit'=>15);
		$nextevents=$this->paginate('Event');
		$this->set(compact('nextevents'));
	}
}
?>