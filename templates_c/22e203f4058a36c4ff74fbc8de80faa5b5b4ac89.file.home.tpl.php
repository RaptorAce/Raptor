<?php /* Smarty version Smarty-3.1.18, created on 2014-09-04 19:35:32
         compiled from "C:\xampp\htdocs\Raptor\tpl\home\home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:87475408a2e4baeb32-45597292%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '22e203f4058a36c4ff74fbc8de80faa5b5b4ac89' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Raptor\\tpl\\home\\home.tpl',
      1 => 1409851404,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '87475408a2e4baeb32-45597292',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'header' => 0,
    'sidebar' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5408a2e4bc23c3_57046422',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5408a2e4bc23c3_57046422')) {function content_5408a2e4bc23c3_57046422($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
<meta name="title" content="Meu site">
<link rel="stylesheet" href="/raptor/res/css/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="/raptor/res/css/main.css">
<script type="text/javascript" src="/raptor/res/js/jquery-1.9.1.js"></script>
</head>
<body>
  <div class="navbar navbar-inverse navbar-fixed-top" role="navigation" id="header">
   <?php echo $_smarty_tpl->tpl_vars['header']->value;?>

  </div>
  <div class="container-fluid" id="menu">
    <div class="row">
      <?php echo $_smarty_tpl->tpl_vars['sidebar']->value;?>

    </div>
    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main" id="center">
      <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

    </div>
  </div>

</body>
<script type="text/javascript" src="/raptor/res/js/md5.js"></script>
<script type="text/javascript" src="/raptor/res/js/html.js"></script>
<script type="text/javascript" src="/raptor/res/js/forms.js"></script>
<script type="text/javascript" src="/raptor/res/js/main.js"></script>
</html><?php }} ?>
