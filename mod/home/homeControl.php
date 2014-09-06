<?php

/**
 * Class mainControl
 *
 * Author: Eder D'Andrea
 * e-mail: ederluizcorrea@gmail.com
 */
class homeControl extends Control {

    /**
     * @var homeModel
     */
    private $model;

    /**
     * @var homeView
     */
    private $view;


    public function __construct() {
        parent::__construct();
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
        
        $content = new homeView();
        
        $content->loadTemplate('home/header');
        $this->view->setVariable('header', $content->render());
        $content->loadTemplate('home/sidebar');
        $this->view->setVariable('sidebar', $content->render());
        $content->loadTemplate('home/overview');
        $this->view->setVariable('content', $content->render());
        $home = $this->view->loadHome();
        return $home;
    }

    public function overview(){
        $this->view->loadTemplate('home/overview');
        $this->commitReplace($this->view->render(), '#center');
    }

    /**
     * Some specifications here
     *
     * @return
     */
    public function reports(){
        $this->view->loadTemplate('home/reports');
        $this->commitReplace($this->view->render(), '#center');
    }
    
    public function tbl() {
        
        $this->view->loadTemplate('home/table');
//        $this->view->setVariable('search', $this->getPost('teste'));
        $this->commitAdd($this->view->render(), '#run');
    }
            
    
}