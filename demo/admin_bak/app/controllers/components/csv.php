<?php
	class CsvComponent extends Object {

		/**
		 * @var Array of default settings for the component if not provided while including 
		 * this component in any controller
		 * @access private
		 * 
		 *  @keys 
		 *  <li> primaryModel String : Primary Model against which the date is to be retreived </li>
		 *  <li> fields Array : array of fields to be exported in the csv in the following format 
	 	 * 	     @example  'fields'=>array('model1.field1', 'model1.field2' , 'model2.field3' ........ so on)
		 *  	 and to include all fields from a model use 'fields'=>array('model1.*');
		 *  <li> order Array : array of fields to sort data in the format 
		 *  	 @example  'order'=>array("model1.field1", "model2.field2")
		 *  <li> conditions Array :  arrya of conditions to be used while exporting
		 */
		
		private  $defaults = array(
			'primaryModel'=>'',
			'conditions'=>array(),
			'fields'=>array(),
			'order'=>array()
		);
		
		/**
		 * @var Object holds the reference to the instance of controller
		 * @access private 
		 */
		private  $controller = null;
		
		/**
		 * @var Object holds the refernce to the instance of the model of the controller
		 * @access private 
		 */
		private  $model = null;
		
		/**
		 * @var Array of settings for the component
		 * @access private 
		 */
		private $settings = array();
		
		/**
		 * @var Array of formatted data to be returned after retrieving and processing
		 * @access private
		 */
		private  $returnData= array();
		
		/**
		 * @var Boolean Indicating whether to export all fields or selected fields 
		 * Default to true
		 * @access private 
		 */
		private $isAllFields = true;
		
		/**
		 * @var Array of conditions ( representing where clause in the sql query ) in cake format
		 * @access private
		 */
		private $conditions = array();
		
		/**
		  * @var Array of the fields ( representing order clause in sql query) in cake format
		  * @access private 
		  */
		private $order  = array();
		/**
		  * @var Array of fields to be exported ( used for making datebase query) 
		 */
		private $fields = array();
		
		/**
		 * @var Array of fields to exproted in csv ( without model name , used in csv return data)
		 * @access private
		 */
		private $csvExportFields = array();
		
		/**
		 * counter for number of records that are successfully saved
		 * @var int
		 * @access public  
		 */
		public  $accepted = 0;
		
		/**
		 * counter for number of records that could not be saved
		 * @var int
		 * @access public  
		 */
		public $rejected = 0;
		
		
		/**
		 * Callback called before Controller::beforeFilter()
		 */
		function initialize(&$controller, $config) {
			//holding the controllers reference for the later use
			$this->controller = $controller;
			$this->settings = am($this->defaults , $config);
			
			if(!isset($config['primaryModel']) || empty($config['primaryModel'])){
				trigger_error("<b>Warning Csv component</b> : You must provide a primary model to exprort csv data eg.\n var ".'$component'." = array('Csv'=>array=>('primaryModel'=>'yourmodel')");
				exit();
			}
			
			$this->conditions = $this->settings['conditions'];
			
			// if config options are passed as Type String change them to Array
			$this->fields = $this->toArray($this->settings['fields']);
			$this->order = $this->toArray($this->settings['order']);
		}
		
		/**
		 * Callback called after Controller::beforeFilter()
		 */
		function startup(&$controller){
			//holding the controllers model reference for later use
			$this->model = $controller->{$this->settings['primaryModel']};
        }
		
        /**
         * @return nothing
         * @access public 
         * $param $conditions Array of conditions
         */
        public function setConditions($conditions = array()){
        	$this->conditions = $conditions;
        }
        
        /**
         * @return nothing
         * @access public 
         * @param $fields
         */
        public function setFields($fields = array()){
        	$this->fields = $this->toArray($fields);
        		
        }
        
        /**
         * @return nothing
         * @access public
         * @param $order
         */
        public function setOrder($order = array()){
        	$this->order = $this->toArray($order);
        }
        
        
        /**
         * @return the Array of date in a format that is needed to export in csv format
         * @access public 
         * @param $conditions Array of conditions to filter data. if passed \n default conditions gets override ( Default to empty array)
         * @param $fields Array of fields. if passed default fields gets override( Default to empty array) 
         * @param $order Array of fields. if passed default order gets override ( Default to empty array)
         */
		public function getExportData($conditions = array() ,$fields = array() , $order = array()){
			$this->model->recursive = 1;
			$this->controller->layout = null;
			Configure::write('debug', 0);
			
			if(!empty($conditions))
				$this->conditions = $conditions;
			if(!empty($fields))	
				$this->fields = $this->toArray($fields);
			if(!empty($order))
				$this->order = $this->toArray($order);
			
				
			$primary_data = $this->getPrimaryData(); 
			
			
			// loop over each row and add them to csv data
			foreach ($primary_data as $record) {
				$value_row = array();
				foreach($record as $model => $array_of_values){
					$value = array_values($record[$model]);
					$value_row = array_merge($value_row,$value);
				}
				array_push($this->returnData , $value_row);
			}
			
			// Add the fields name at the top row of return array
			$this->setCsvExportFields($primary_data);
			array_unshift($this->returnData , $this->csvExportFields);
			return $this->returnData;
		}
		
		/**
		 * @return String  as status of import
		 * @param  $fields Array
		 */
		
		public function importFromAttachment($fields = array()){
			$attachment = $this->controller->data['File']['csv'];
			
			if($this->isValidFile($attachment)){
				$tmpName =  $attachment['tmp_name'];
				$fp = fopen($tmpName, 'r');
				$i = 1;
				
				while(($values = fgetcsv($fp ,10000 , ",")) !=FALSE){
					
					if($i != 1){
						$this->processRecord($fields, $values);
					}
					$i++;
				}
				
			}else{
				$this->controller_model->validationErrors['File']['csv'] = "Invalid File Format";
			}
			
			return sprintf("Saved records : %d, rejected record : %d", $this->accepted, $this->rejected);
		}
		
		/**
		 * @return Array of records fethced from model
		 * @access private 
		 */
		private function getPrimaryData(){
			$data = $this->model->find('all',
				array('conditions'=>$this->conditions ,
					'fields'=>$this->fields,
					'order'=>$this->order
				)
			);
			return $data;
		}
		
		
		/**
		 * sets the array fields names to be exported in csv withour their model
		 * @access private
		 */
		private function setCsvExportFields(){
			$fields = array();
			
			foreach($this->fields as $field){
				$temp_arr = explode(".", $field);
				$model = $temp_arr[0];
				if($temp_arr[1] == "*"){ // get all the fields for that model
					if($this->isPrimaryModel($model)){
						$fields = am($fields, array_keys($this->model->_schema));
					}else{
						$fields = am($fields, array_keys($this->model->{$model}->_schema));
					}
				}else{
					array_push($fields, $temp_arr[1]);
				}
			}
			$this->csvExportFields = $fields;
			
		} 
		
		/**
		 * @return Boolean 
		 * @param String $modelname
		 */
		private function isPrimaryModel($modelname){
			if($this->settings["primaryModel"] == $modelname){
				return true;
			}
			return false;
		}
		
		/**
		 * Convert param to array if it is string otherwise returns as it is
		 * @return Array
		 * @param unknown_type $subject
		 */
		private function toArray($subject){
			if( is_array($subject)){
				return $subject;	
			}
			$s[] = $subject;
			return $s;
		}
		
		/**
		 * @returns Boolean : true if attached file is csv else false
		 * @param $attachment Array
		 */
		function isValidFile($attachment){
			$ext = $this->getFileExtension($attachment['name']);
			if($ext == 'csv')
				return true;
			else 	
				return false;
		}
		
		/**
		 * @returns the extension of the filename without extension
		 * @param $file String
		 */
		private function getFileExtension($file)
        {
            $ext = substr($file, strrpos($file, '.') + 1);
            return $ext;
        }
		
        
        /**
         * @returns Boolean : if a record with given id in the exist in the primary model then true else false
         * @param $id
         * @access private 
         */
		private function __idExists($id){
			$record =  $this->model->find('first', array('conditions'=>array('id'=>$id) ,'recursive'=>-1));
			if(empty($record))
				return false;
			else 
				return true;				
		}
		
		/**
		 * function to save a single record with belognsTo and hasone association. 
		 * Also manages tha status of accepted and rejected records according to the current record
		 * @return nothing
		 * @param Array $fields
		 * @param Array $values
		 */
		private function processRecord($fields, $values){
			$record = array();
			$offset = 0;
			foreach ($fields as $model=>$field_names_array) {
				$fields_count = sizeof($field_names_array);
				$record[$model] = array_combine($field_names_array , array_slice($values, $offset ,$fields_count));
				$offset += $fields_count;
			}
			
			
			$id = $record[$this->settings['primaryModel']]['id'];
			$saved = false;
			if($this->__idExists($id)){
				// edit record 
				$saved = $this->model->saveAll($record , array("validate"=>'first'));
				
			}elseif(empty($id)){
				//save new record
				$this->model->create();
				unset($record[$this->settings['primaryModel']]['id']);
				$saved = $this->model->saveAll($record, array('validate'=>'first'));
			}else{
				// do nothing
			}
			
			if($saved){
				$this->accepted++;
			}else{
				$this->rejected++;
			}
		}
	}
?>