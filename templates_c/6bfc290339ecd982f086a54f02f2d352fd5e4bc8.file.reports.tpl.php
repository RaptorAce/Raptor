<?php /* Smarty version Smarty-3.1.18, created on 2014-09-05 03:37:53
         compiled from "C:\xampp\htdocs\Raptor\tpl\home\reports.tpl" */ ?>
<?php /*%%SmartyHeaderCode:221525408a2e5f316a8-19692923%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6bfc290339ecd982f086a54f02f2d352fd5e4bc8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Raptor\\tpl\\home\\reports.tpl',
      1 => 1409881071,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '221525408a2e5f316a8-19692923',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5408a2e6025db0_26481650',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5408a2e6025db0_26481650')) {function content_5408a2e6025db0_26481650($_smarty_tpl) {?><div id="run">
    <form action="/raptor/home/tbl">
         <div class="row">
          <div class="col-md-4">
            <label>teste:</label>
            <select>
                 <option value="this needs sql queries">this needs sql queries</option>
                 <option value="Moar sql queries">Moar sql queries</option>
            </select>
            </div>
            <div class="col-md-3">
                <div class="input-group">
                    <input type="text" id="inicdata" class="form-control" value="2014-07-01">
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
                    <input type="text" id="fimdata" class="form-control" value="<?php echo date('Y-m-d');?>
">
                    <span class="input-group-btn">
                    <button class="btn btn-default" type="button">Go!</button>
                   </span>
                </div><!-- /input-group -->
            </div><!-- /.col-lg-6 -->
         </div>
        <input type="submit" value="Ok"/>
    </form>
</div>
<script>
    Forms.Actions('#run');
    $(function() {
        $( "#inicdata" ).datepicker({ showButtonPanel: true, dateFormat: "yy-mm-dd"  });
        $( "#fimdata" ).datepicker({ showButtonPanel: true, dateFormat: "yy-mm-dd"  });
    });
    $( ".selector" ).datepicker({ showButtonPanel: true });
</script><?php }} ?>
