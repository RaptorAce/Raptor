<?php

class mainView extends View {

    public function getTemplate() {
        
        return $this->loadTemplate();
    }
    
    public function loadHome() {
        $this->loadTemplate('main/home');
        return $this->render();
    }
    
}