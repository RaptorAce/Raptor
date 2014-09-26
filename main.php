<?php

/*
 * Define as pastas principais
 */

define('MAINDIR',__DIR__);
define('APPDIR', MAINDIR.'/app');
define('IFCDIR',APPDIR.'/ifc');
define('LIBDIR',APPDIR.'/lib');
define('TPLDIR', MAINDIR . '/tpl');

/*
 * BASEDIR
 * Define a pasta padrão para as URLs
 */

//$basedir = str_replace(basename(__FILE__),'', $_SERVER["PHP_SELF"]);
//define('BASEDIR',$basedir);

define('BASEDIR','/raptor/');

/*
 * Encontra a URL em que estamos trabalhando e define como MAINURL
 * usado para chamar CSS e JS
 */

//if (isset($_SERVER['HTTP_REFERER'])) {
//    define ('MAINURL', $_SERVER['HTTP_REFERER']);
//} else {
    define ('MAINURL', 'http://' . $_SERVER['HTTP_HOST'] . BASEDIR);
//}

/*
 * Define a Pagina padrão
 * A pagina que será aberta quando não informado nenhum url
 */
    
define('DFTPAGE', 'login');

define('CSSDIR', MAINURL . 'res/css');
define('JSDIR', MAINURL . 'res/js');

define('ENVDEV', '1');

/*
 * Define as funções autoload e fatal error handler
 */

register_shutdown_function('fatalErrorHandler');
spl_autoload_register('autoLoad');

/*
 * Inclui as bibliotecas principais
 */

include_once LIBDIR.'/core.php';
include_once LIBDIR.'/html.php';
include_once LIBDIR.'/string.php';
include_once LIBDIR.'/cr.php';
include_once LIBDIR.'/smarty/Smarty.class.php';

/**
 * Função Fatal error handler
 * mostra a mensagem de erro sempre que tirermos uma, indicando o arquivo e linha que gerou o erro
 */

function fatalErrorHandler(){
    $error = error_get_last();
    if ($error['type'] === E_ERROR || $error['type'] === E_USER_ERROR || $error['type'] === E_PARSE || $error['type'] === E_COMPILE_ERROR) {
        $var = '<h4>Tipo Erro: <b>' . $error['type'] . "</b><h4>";
        $var .= '<h4><b>Mensagem</b>: ' . $error['message'] . "<h4>";
        $var .= '<h3><b>Arquivo:</b> ' . $error['file'] . "</h3>";
        $var .= '<h3><b>Linha:</b> ' . $error['line'] . "</h3>";

        echo $var;
        exit;
    }
}

/**
 * Função autoLoad
 * Procura e carrega um controler sempre que iniciamos uma classe / modulo
 * que não esta iniciada
 * 
 * @param string $class_name
 * @return null
 */

function autoLoad($class_name) {
    $search = MAINDIR . '/mod';
    $file = $search . '/' . CALL . '/' . $class_name . '.php';
    if (file_exists($file)) {
        require_once $file;
        return;
    }
}

/*
 * Inicializa a classe core
 * e executa o modulo execute()
 * que da inicio ao site
 */

$core = new core();
$core->execute();

exit;
