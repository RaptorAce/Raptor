<?php /* Smarty version Smarty-3.1.18, created on 2014-09-05 04:24:45
         compiled from "C:\xampp\htdocs\Raptor\tpl\home\reports.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3102754091eb54d1fc7-47338347%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6bfc290339ecd982f086a54f02f2d352fd5e4bc8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Raptor\\tpl\\home\\reports.tpl',
      1 => 1409883880,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3102754091eb54d1fc7-47338347',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_54091eb55378c1_68341209',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54091eb55378c1_68341209')) {function content_54091eb55378c1_68341209($_smarty_tpl) {?><div id="run">
    <form action="/raptor/home/tbl">
         <div class="row">
          <div class="col-md-4">
            <label>teste:</label>
            <select name="func" class="chosen-select" multiple>
                 <option value="this needs sql queries">this needs sql queries</option>
                 <option value="Moar sql queries">Moar sql queries</option>
            </select>
            </div>
            <div class="col-md-3">
                <div class="input-group">
                    <input type="text" id="inicdata" class="form-control datepick" value="2014-07-01">
                   <span class="input-group-btn">
                    <button class="btn btn-default" type="button">Go!</button>
                   </span>
                </div><!-- /input-group -->
            </div><!-- /.col-lg-6 -->
         </div>
        <br>
         <div class="row">
            <div class="col-md-3 col-md-offset-4">
                <div class="input-group">
                    <input type="text" id="fimdata" class="form-control datepick" value="<?php echo date('Y-m-d');?>
">
                    <span class="input-group-btn">
                    <button class="btn btn-default" type="button">Go!</button>
                   </span>
                </div><!-- /input-group -->
            </div><!-- /.col-lg-6 -->
         </div>
        <input class="btn btn-primary" type="submit" value="Ok"/>
    </form>
</div>
<script>
    Forms.Actions('#run');
    $(function() {
        $( ".datepick" ).datepicker({ showButtonPanel: true, dateFormat: "yy-mm-dd"  });
    });
</script><?php }} ?>
