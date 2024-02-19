<?php
class SearchComponent extends Object {
    
    var $controller = null;
  
    function initialize(&$controller, $config)
    {
        $this->controller = $controller;
    }
    
	function getConditions(){
        $conditions = array();
        foreach($this->controller->params['named'] as $key=>$value){
            if(isset($this->controller->{$this->controller->modelClass}->_schema[$key])){            	
                switch($this->controller->{$this->controller->modelClass}->_schema[$key]['type']){
                    case "string":
                        $conditions[$this->controller->modelClass . "." .$key . " LIKE"] =  $value."%";
                        break;
                    case "integer":
                        $conditions[$this->controller->modelClass . "." .$key] =  $value;
                        break;
                    case "date":
                        if(isset($this->controller->params['named'][$key."_fromdate"])){
                            $from = date("Y-m-d", strtotime( $this->controller->params['named'][$key."_fromdate"] ));
                            $conditions[$this->controller->modelClass.".".$key." >="] = $from;
                        }
                        if(isset($this->controller->params['named'][$key."_todate"])){
                            $to = date("Y-m-d", strtotime($this->params['named'][$key."_todate"]));
                            $conditions[$this->controller->modelClass.".".$key." <="] = $to;
                        }
                        break;
                    case "datetime":                    	
                        $conditions[$this->controller->modelClass.".".$key] = date("Y-m-d", strtotime($value));
                }
            }
        }
        return $conditions;
    }
    
}
?>