<?php

/**
 * Class mainControl
 *
 * Author: Eder D'Andrea
 * e-mail: ederluizcorrea@gmail.com
 */
class homeControl extends Control {

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
        session_start();
        if (!isset($_SESSION['access'])){
            echo 'ACCESS DENIED';
            exit;
        }
        $this->view = new homeView();
        $this->model = new homeModel();
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

    public function overview(){
        $this->view->loadTemplate('home/overview');
        $this->commitReplace($this->view->render(), '#center');
    }

    /**
     * Modulo Reports
     *
     * @return null
     */
    public function reports(){
        $this->view->loadTemplate('home/reports');
        $this->commitReplace($this->view->render(), '#center');
    }

    /*
     * Modulo tbl
     * Retorna a tabela
     * 
     * @return null
     */
    
    public function tbl() {

	$pr = $this->getPost();
        
        if ($pr['func'] != 'null'){
            $prt = explode(',', $pr['func']);

            $this->view->setVariable('res', $prt);
            $this->view->setVariable('idt', $pr['idt']);
            $this->view->setVariable('fdt', $pr['fdt']);
            $this->view->loadTemplate('home/table');
            $this->commitReplace($this->view->render(), '#table');
        }
        else{
            $this->commitReplace('', '#table');
        }
    }
    
    public function funcionario($para = ''){
        
        if ($para == ''){
            $this->view->loadTemplate('home/funcionario');
            $this->commitReplace($this->view->render(),'#center');
        }
        else {
            $this->commitAdd($para, '#func');
        }
    }
    
    public function logout(){
        session_destroy();
        echo "location.href='http://localhost/raptor/login/home';";
    }
    
}