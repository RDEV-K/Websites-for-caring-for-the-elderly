<?php
class RedirectComponent extends Object {
    
    var $controller = null;
  
    function initialize(&$controller, $config)
    {
        $this->controller = $controller;
    }
    
    function urlToNamed() {
        $urlArray = $this->controller->params['url'];
        unset($urlArray['url']);
        unset($urlArray['ext']);
        
        if(!empty($urlArray)){
            $this->controller->redirect($urlArray, null, true);
        }
    }
    
}
?>