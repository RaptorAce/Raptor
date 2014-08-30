<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Control {
    
    private $post;
    
    public function __construct() {
        $this->post = $_POST;
    }

    protected function getPost($name = false) {
        if ($name) {
            return $this->post[$name];
        }
        return $this->post;
    }
    
    protected function commitReplace($html, $block) {
        echo Html::ReplaceHtml($html, $block);
        exit;
    }
    
    protected function commitAdd($html, $block) {
        echo Html::AddHtml($html, $block);
        exit;
    }
    
}