<?php

class homeView extends View {

    public function getTemplate() {
        
        return $this->loadTemplate();
    }
    
    public function loadHome() {
        $this->loadTemplate('home/home');
        return $this->render();
    }
    
}