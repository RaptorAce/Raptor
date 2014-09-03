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
    }

    /**
     * Função HOME - É chamada quando
     * é acessado diretorio root
     *
     * @return string
     */
    public function home() {
        
        $content = new homeView();
        
        $content->loadTemplate('home/content');
        $this->view->setVariable('content', $content->render());
        $home = $this->view->loadHome();
        return $home;
    }

    /**
     * Some specifications here
     *
     * @return
     */
    public function run(){
        $this->view->loadTemplate('home/run');
        $this->commitReplace($this->view->render(), '#center');
    }
    
    public function tbl() {
        
        $this->view->loadTemplate('home/table');
//        $this->view->setVariable('search', $this->getPost('teste'));
        $this->commitAdd($this->view->render(), '#run');
    }
            
    
}