<?php /* Smarty version Smarty-3.1.18, created on 2014-09-02 22:26:39
         compiled from "C:\xampp\htdocs\Raptor\tpl\main\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1930540627fff2de92-88154574%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1f424420e27dffc7c30d659d5db0815f975bd39b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Raptor\\tpl\\main\\content.tpl',
      1 => 1409604386,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1930540627fff2de92-88154574',
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
  'unifunc' => 'content_5406280003db24_07029780',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5406280003db24_07029780')) {function content_5406280003db24_07029780($_smarty_tpl) {?><div class="header">
    <p>Header</p>
</div>
<div class="menu">
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
