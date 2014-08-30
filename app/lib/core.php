<?php

class core {
    
    private function loadUrl(){
        
        $url = $_SERVER['REQUEST_URI'];
        $uri = str_replace(BASEDIR,'', $url);
        $uri = explode('/', $uri);
        
        return $uri;
        
    }
    
    public function __construct() {
        include_once IFCDIR . '/control.php';
        include_once IFCDIR . '/model.php';
        include_once IFCDIR . '/view.php';
    }
    
    public function execute() {
        $uri = $this->loadUrl();
        
        if (count($uri)>1) {
            define('CALL', $uri[0]);
            $module = $uri[0].'Control';
            $action = $uri[1];
            $control = new $module;
            $result = $control->$action();
            echo $result;
            exit;
        }   
        
        throw new Exception('Error: Invalid Request');
    }
    
}

