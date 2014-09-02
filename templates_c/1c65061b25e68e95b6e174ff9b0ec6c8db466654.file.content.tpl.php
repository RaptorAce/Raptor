<?php /* Smarty version Smarty-3.1.18, created on 2014-09-02 22:26:42
         compiled from "C:\xampp\htdocs\Raptor\tpl\dummy\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2161754062802766479-57640538%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1c65061b25e68e95b6e174ff9b0ec6c8db466654' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Raptor\\tpl\\dummy\\content.tpl',
      1 => 1409600271,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2161754062802766479-57640538',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'menu' => 0,
    'option' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_540628027b4698_25772829',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_540628027b4698_25772829')) {function content_540628027b4698_25772829($_smarty_tpl) {?><div class="menu">
    <ul>
        <?php  $_smarty_tpl->tpl_vars["option"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["option"]->_loop = false;
 $_smarty_tpl->tpl_vars["key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['menu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["option"]->key => $_smarty_tpl->tpl_vars["option"]->value) {
$_smarty_tpl->tpl_vars["option"]->_loop = true;
 $_smarty_tpl->tpl_vars["key"]->value = $_smarty_tpl->tpl_vars["option"]->key;
?>
            <li>
                <a href="<?php echo $_smarty_tpl->tpl_vars['option']->value['href'];?>
"><?php echo $_smarty_tpl->tpl_vars['option']->value['caption'];?>
</a>
            </li>
            <?php } ?>
    </ul>
</div>
    <div id="center" class="center">
        
    </div><?php }} ?>
