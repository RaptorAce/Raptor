<?php

/**
 * Class loginControl
 *
 * Author: Eder D'Andrea
 * e-mail: ederluizcorrea@gmail.com
 */
class loginControl extends Control {

    /**
     * Model Primario
     * 
     * @var homeModel
     */
    private $model;

    /**
     * View primaria
     * 
     * @var homeView
     */
    private $view;

    public function __construct() {
        parent::__construct();
        $this->view = new loginView();
        $this->model = new loginModel();
        $this->view->setVariable('cssdir', CSSDIR);
        $this->view->setVariable('jsdir', JSDIR);
        $this->view->setVariable('basedir', BASEDIR);
    }

    /**
     * Função HOME - É chamada quando
     * é acessado diretorio root
     *
     * @return string
     */
    public function home() {
        $home = $this->view->loadHome();
        return $home;
    }
    
    public function logar(){
        @session_start();
        if ($_POST){
            $user = $this->getPost('user');
            $pass = $this->getPost('pass');
            if ($user == 'raptor' && $pass == 'f9ef2e5e22b257fd62e8395a280a8857'){
                $_SESSION['access'] = true;
                echo '5aca0fe6e5321f9e6867582c1739c3e1';
                exit;
            }
            echo 'boo';
            exit;
            
        }
        
        throw new Exception('Error: Invalid Request');
        
    }
    
}