<?php
class StatusHelper extends AppHelper {
    var $helpers = array('Html');
    
    function create($id , $status){
		
    	$link = null;
    	if($status){
    		$link = $this->Html->link($this->Html->image("admin/active.png", array('class'=>'table_imgs')) , array('action'=>'toggleStatus' , $id ,0) , array('escape'=>false));
    	}else{
    		$link = $this->Html->link($this->Html->image("admin/cross.png", array('class'=>'table_imgs')) , array('action'=>'toggleStatus' , $id ,1) ,array('escape'=>false));
    	}
    	return $this->output($link);
    }
}
?>