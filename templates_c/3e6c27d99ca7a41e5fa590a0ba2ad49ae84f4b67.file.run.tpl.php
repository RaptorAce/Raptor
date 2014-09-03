<?php /* Smarty version Smarty-3.1.18, created on 2014-09-03 02:15:58
         compiled from "C:\xampp\htdocs\Raptor\tpl\main\run.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12824540628019ee887-08752694%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3e6c27d99ca7a41e5fa590a0ba2ad49ae84f4b67' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Raptor\\tpl\\main\\run.tpl',
      1 => 1409703123,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12824540628019ee887-08752694',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_54062801a21502_45523076',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54062801a21502_45523076')) {function content_54062801a21502_45523076($_smarty_tpl) {?><div id="run">
    <form action="/raptor/Main/tbl">
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
