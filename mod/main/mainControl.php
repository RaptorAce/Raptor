<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



class mainControl extends Control {
    
    private $model;
    private $view;
    
    public function __construct() {
        parent::__construct();
        $this->view = new mainView();
        $this->model = new mainModel();
    }

    public function home() {
        
        $content = new mainView();
        
        $menu = array(
            array(
                'href' => '/raptor/main/run',
                'caption' => 'Abrir'
                ),
        );
        
        $content->loadTemplate('main/content');
        $content->setVariable('menu', $menu);
        $this->view->setVariable('content', $content->render());
        $home = $this->view->loadHome();
        return $home;
    }
    
    public function run(){
        $this->view->loadTemplate('main/run');
        $this->commitReplace($this->view->render(), '#center');
    }
    
    public function tbl() {
        
        $this->view->loadTemplate('main/table');
//        $this->view->setVariable('search', $this->getPost('teste'));
        $this->commitAdd($this->view->render(), '#run');
    }
            
    
}