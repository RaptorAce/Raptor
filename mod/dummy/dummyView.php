<?php

class dummyView extends View {

    public function getTemplate() {
        
        return $this->loadTemplate();
    }
    
    public function loadHome() {
        $this->loadTemplate('dummy/home');
        return $this->render();
    }
    
}