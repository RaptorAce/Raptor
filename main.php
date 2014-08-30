<?php

define('MAINDIR',__DIR__);
define('APPDIR', MAINDIR.'/app');
define('IFCDIR',APPDIR.'/ifc');
define('LIBDIR',APPDIR.'/lib');
define('BASEDIR','/raptor/');
define('TPLDIR', MAINDIR . '/tpl');

register_shutdown_function('fatalErrorHandler');
spl_autoload_register('autoLoad');

/*
* Edited!
*/
include_once LIBDIR.'/core.php';
include_once LIBDIR.'/html.php';
include_once LIBDIR.'/string.php';
include_once LIBDIR.'/smarty/Smarty.class.php';

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

function autoLoad($class_name) {
    $search = MAINDIR . '/mod';
    $file = $search . '/' . CALL . '/' . $class_name . '.php';
    if (file_exists($file)) {
        require_once $file;
    }
}

$core = new core();
$core->execute();

exit;
