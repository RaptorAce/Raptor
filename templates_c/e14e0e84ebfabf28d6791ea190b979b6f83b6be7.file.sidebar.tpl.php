<?php /* Smarty version Smarty-3.1.18, created on 2014-09-05 01:54:21
         compiled from "C:\xampp\htdocs\Raptor\tpl\home\sidebar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:57975408a2e4b8f738-36349324%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e14e0e84ebfabf28d6791ea190b979b6f83b6be7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Raptor\\tpl\\home\\sidebar.tpl',
      1 => 1409874793,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '57975408a2e4b8f738-36349324',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5408a2e4b935b0_89926380',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5408a2e4b935b0_89926380')) {function content_5408a2e4b935b0_89926380($_smarty_tpl) {?>      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="home/overview">Overview</a></li>
            <li><a href="home/reports">Reports</a></li>
            <li><a href="#">Analytics</a></li>
            <li><a href="#">Export</a></li>
        </div>
      </div>

      <script>
          $('ul.nav > li').click(function(){
              $(this).parent('ul').find('li').removeClass('active');
              $(this).addClass('active');
          });
      </script><?php }} ?>
