<?php /* Smarty version Smarty-3.1.18, created on 2014-09-01 22:07:08
         compiled from "C:\xampp\htdocs\Raptor\tpl\dummy\run.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1320153f011a98e3c80-39063837%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a7b6a64cafc68759c1df27436f9303798447abeb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Raptor\\tpl\\dummy\\run.tpl',
      1 => 1409600271,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1320153f011a98e3c80-39063837',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53f011a9920b84_74200282',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53f011a9920b84_74200282')) {function content_53f011a9920b84_74200282($_smarty_tpl) {?><div id="run">
    <form action="/raptor/dummy/search">
        <label>teste:</label>
        <input type="text" name="teste" />
        <input type="submit" value="Ok"/>
    </form>
</div>
<script>
    Forms.Actions('#run');
    </script><?php }} ?>
