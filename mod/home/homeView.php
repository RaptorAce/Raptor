<?php

class homeView extends View {

    public function getTemplate() {
        
        return $this->loadTemplate();
    }
    
    public function loadHome() {
        $this->loadTemplate('home/header');
        $this->setVariable('header', $this->render());
        $this->loadTemplate('home/sidebar');
        $this->setVariable('sidebar', $this->render());
        $this->loadTemplate('home/overview');
        $this->setVariable('content', $this->render());
        $this->loadTemplate('home/home');
        return $this->render();
    }
    
}