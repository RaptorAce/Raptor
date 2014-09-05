<div id="run">
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
                    <input type="text" id="fimdata" class="form-control" value="{date('Y-m-d')}">
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
</script>