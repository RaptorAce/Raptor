<?php

class View {
    
    private $smarty;
    private $template;
    
    public function __construct() {
        $this->smarty = new Smarty();
        $this->smarty->setTemplateDir(TPLDIR);
    }


    public function loadTemplate($name) {
        
        $this->template = $name . '.tpl';
    }
    
    public function setVariable($name, $value) {
        
        $this->smarty->assign($name, $value);
    }

    public function render() {
        
        return $this->smarty->fetch($this->template);
    }
    
}