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

    protected function loadDefault(){
        define('CALL', DFTPAGE);
        if(method_exists(DFTPAGE . 'Control', 'home')){
            $control = new loginControl();
            $result = $control->home();
            echo $result;
            exit;
        }
    }

    public function execute() {
          $uri = $this->loadUrl();
          if (count($uri)>1) {
            define('CALL', $uri[0]);
            $module = $uri[0].'Control';
            $action = $uri[1];
            $param = '';
            
            if (count($uri)>2){
                $param = $uri[2];
            }
            
            if (method_exists($module,$action)){
                 $control = new $module;
                 $result = $control->$action($param);
                 echo $result;
                 exit;
                }
                throw new Exception('Error: Invalid Request');
            }

            $this->loadDefault();
            
//        throw new Exception('Error: Invalid Request');
    }

}
