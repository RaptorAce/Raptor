<?php

class devControl extends Control {

    /**
     * @var devModel
     */
    private $model;

    /**
     * @var
     */
    private $view;

    /**
     * @var array
     */
    private $data = array();

    public function __construct() {
        parent::__construct();
        $this->model = new devModel();
        $this->view = new devView();
        if (!defined('ENVDEV')) {
            throw new Exception('Não está no ambiente');
        }
    }

    public function openDevTools() {
        $this->view->loadTemplate('dev/devTools');
        $this->commitPrint($this->view->render());
    }

    private function checkDatabaseData() {
        $check = array(
            'host', 'user', 'pass', 'db'
        );

        array_walk($check, function($item) {
            if (!$this->getPost($item))
                throw new Exception('O post com os dados não parece estar correto!');
        });
    }

    public function encryptdata() {

        $this->checkDatabaseData();
        $data = json_encode($this->getPost());
        $encrypted = CR_::get($data);
        $this->commitShow('#createconn', true);
        $this->commitReplace($encrypted,'#result');
    }

    public function decryptdata() {
        $data = $this->getPost('todecrypt');
        $this->commitHide('#createconn', true);
        if ($data) {
            $data = CR_::get($data);
            $this->commitReplace($data, '#result');
        }
        $this->commitReplace('Nenhum dado para decrypt','#result');
    }

    public function makeFile() {
        $data = $this->getPost();
        if ($data) {
            $file = MODELDIR . '/' . md5($data['connname']);
            file_put_contents($file, $data['connstr']);
            $this->commitReplace('File created: ' . $file,'#result');
        }
        $this->commitHide('#createconn', true);
        $this->commitReplace('No data to make a connection file','#result');
    }

}