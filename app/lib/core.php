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
          define('CALL', $uri[0]);        
          if (count($uri)>1) {
            $module = $uri[0].'Control';
            $action = $uri[1];
              if (method_exists($module,$action)){
                 $control = new $module;
                 $result = $control->$action();
                 echo $result;
                 exit;
                }
          }   
        
            require_once MAINDIR . '/mod/main/mainControl.php';
            require_once MAINDIR . '/mod/main/mainView.php';
            require_once MAINDIR . '/mod/main/mainModel.php';
            $control = new mainControl;
            $result = $control->home();
            echo $result;
            exit;
//        throw new Exception('Error: Invalid Request');
    }
    
}
