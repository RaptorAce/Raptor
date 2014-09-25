<?php

class loginView extends View {

    public function getTemplate() {
        
        return $this->loadTemplate();
    }
    
    public function loadHome() {
        $this->loadTemplate('login/login');
        return $this->render();
    }
    
}