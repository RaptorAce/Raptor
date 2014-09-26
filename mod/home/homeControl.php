<?php

/**
 * Class mainControl
 *
 * Author: Eder D'Andrea
 * e-mail: ederluizcorrea@gmail.com
 */
class homeControl extends Control {

    /**
     * Model Primario
     * 
     * @var homeModel
     */
    private $model;

    /**
     * View primaria
     * 
     * @var homeView
     */
    private $view;

    /**
     * Login Validate -
     * Checa na session por um login com sucesso.
     * retorna true em um login, do contrario retorna false
     * 
     * @return bool
     */

    protected function loginValidate(){
        if(isset($_SESSION['access'])){
            return ($_SESSION['access'] == 'ba8a48b0e34226a2992d871c65600a7c' ? true : false );
        }
        return false;
    }

    protected function postValidate(){
        if ($_SERVER['REQUEST_METHOD'] != 'POST'){
            header('location: ' . MAINURL . 'home/home');
        }
    }

    public function __construct() {
        parent::__construct();
        session_start();
        if ($this->loginValidate()){
            $this->view = new homeView();
            $this->model = new homeModel();
            $this->view->setVariable('cssdir', CSSDIR);
            $this->view->setVariable('jsdir', JSDIR);
            $this->view->setVariable('basedir', BASEDIR);
        }

        else {
            echo 'ACCESS DENIED';
            exit;
        }
    }

    /**
     * Função HOME - É chamada quando
     * é acessado diretorio root
     *
     * @return string
     */
    public function home() {
            $home = $this->view->loadHome();
            return $home;
    }

    public function overview(){
        $this->postValidate();
        $this->view->loadTemplate('home/overview');
        $this->commitReplace($this->view->render(), '#center');
    }

    /**
     * Modulo Reports
     *
     * @return null
     */
    public function reports(){
        $this->postValidate();
        $this->view->loadTemplate('home/reports');
        $this->commitReplace($this->view->render(), '#center');
    }

    /**
     * Modulo tbl
     * Retorna a tabela
     * 
     * @return null
     */

    public function tbl() {
        $this->postValidate();

	$pr = $this->getPost();

        if ($pr['func'] != 'null'){
            $prt = explode(',', $pr['func']);

            $this->view->setVariable('res', $prt);
            $this->view->setVariable('idt', $pr['idt']);
            $this->view->setVariable('fdt', $pr['fdt']);
            $this->view->loadTemplate('home/table');
            $this->commitReplace($this->view->render(), '#table');
        }
        else{
            $this->commitReplace('', '#table');
        }
    }

    public function funcionario($para = ''){
        $this->postValidate();

        if ($para == ''){
            $this->view->loadTemplate('home/funcionario');
            $this->commitReplace($this->view->render(),'#center');
        }
        else {
            $this->commitAdd($para, '#func');
        }
    }

    /**
     * Metodo logout
     * 
     * Destroi a session e redireciona para a tela de login
     */

    public function logout(){
        session_destroy();
        header('location: ' . MAINURL . 'login/home');
        exit;
    }
}