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
                $_SESSION['access'] = 'ba8a48b0e34226a2992d871c65600a7c';
                echo '5aca0fe6e5321f9e6867582c1739c3e1';
                exit;
            }
            echo 'boo';
            exit;

        }

        throw new Exception('Error: Invalid Request');

    }

}