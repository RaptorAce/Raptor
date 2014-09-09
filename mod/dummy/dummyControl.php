<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



class dummyControl extends Control {
    
    private $model;
    private $view;
    
    public function __construct() {
        parent::__construct();
        $this->view = new dummyView();
        $this->model = new dummyModel();
    }

    public function home() {
        
        $content = new dummyView();
        
        $menu = array(
            array(
                'href' => '/raptor/dummy/run',
                'caption' => 'Executar'
                ),
            array(
                'href' => '/raptor/dummy/close',
                'caption' => 'Close'
            )
        );
        
        $content->loadTemplate('dummy/content');
        $content->setVariable('menu', $menu);
        $this->view->setVariable('content', $content->render());
        $home = $this->view->loadHome();
        return $home;
    }
    
    public function run(){
        $this->view->loadTemplate('dummy/run');
        $this->commitReplace($this->view->render(), '#center');
    }
    
    public function search() {
        
        $this->view->loadTemplate('dummy/search');
        $this->view->setVariable('search', $this->getPost('teste'));
        $this->commitAdd($this->view->render(), '#run');
    }

}