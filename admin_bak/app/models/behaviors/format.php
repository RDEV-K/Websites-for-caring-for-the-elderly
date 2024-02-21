<?php
    class FormatBehavior extends ModelBehavior
    {
        var $_default = array('labels'=> array());
        var $model= null;
        var $settings = array();
        function setup(&$model, $config)
        {
            $this->model= $model;
            $this->settings[$model->name] = array_merge($this->_default, $config);
        }
        function beforeSave(&$model)
        {
        	extract($this->settings[$model->name]);
            if(isset($labels))
            {
                foreach($labels as $label)
                {
                	if(isset($model->data[$model->name][$label])){
                		if (!empty($model->data[$model->name][$label])) {
                    		$model->data[$model->name][$label] = date('Y-m-d', strtotime($model->data[$model->name][$label]));
                		} else {
                			$model->data[$model->name][$label] = null;
                		}
                    }
                }
            }
            return true;
        }
        function afterFind(&$model, $result,$primary){
            if($primary==1){
                extract($this->settings[$model->name]);
                foreach($result as $key=>$value){
                    if(isset($value[$model->name])){
                        foreach($labels as $label){
                            if(isset($value[$model->name][$label]) && isset($model->actsAs) && !empty($value[$model->name][$label]))
                                $result[$key][$model->name][$label]= date('d-m-Y',strtotime($result[$key][$model->name][$label])) ;
                        }
                    }
                }
            }
            return $result;
        }
    }
?>