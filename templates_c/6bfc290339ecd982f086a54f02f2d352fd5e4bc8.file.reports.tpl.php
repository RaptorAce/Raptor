<?php /* Smarty version Smarty-3.1.18, created on 2014-09-04 19:35:33
         compiled from "C:\xampp\htdocs\Raptor\tpl\home\reports.tpl" */ ?>
<?php /*%%SmartyHeaderCode:221525408a2e5f316a8-19692923%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6bfc290339ecd982f086a54f02f2d352fd5e4bc8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Raptor\\tpl\\home\\reports.tpl',
      1 => 1409761794,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '221525408a2e5f316a8-19692923',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5408a2e6025db0_26481650',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5408a2e6025db0_26481650')) {function content_5408a2e6025db0_26481650($_smarty_tpl) {?><div id="run">
    <form action="/raptor/home/tbl">
        <p>
            <label>teste:</label>
            <select>
                 <option value="this needs sql queries">this needs sql queries</option>
                 <option value="Moar sql queries">Moar sql queries</option>
            </select>
            <select>
                 <option value="this needs sql queries">this needs sql queries</option>
                 <option value="Moar sql queries">Moar sql queries</option>
            </select>
        </p>
        <input type="submit" value="Ok"/>
    </form>
</div>
<script>
    Forms.Actions('#run');
    </script><?php }} ?>
