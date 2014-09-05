<div id="run">
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
                    <input type="text" id="fimdata" class="form-control datepick" value="{date('Y-m-d')}">
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
</script>