<div id="run">
    <form action="/raptor/home/tbl">
         <div class="row">
          <div class="col-md-4">
            <label>Funcionário: </label>
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
<div class="">
   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque porta vulputate lectus euismod convallis. Pellentesque viverra varius pellentesque. Suspendisse accumsan iaculis eros, vel feugiat lorem porttitor ut. Sed pellentesque vitae ligula ut consectetur. Donec tristique aliquet lobortis. Vivamus auctor tempus venenatis. Nullam lobortis turpis at dolor luctus semper id sed lorem. Aliquam vulputate vestibulum mi, at porta neque egestas vel. Etiam lacus nisi, porttitor id purus eu, accumsan accumsan quam.</p>
</div>
<script>
    Forms.Actions('#run');
    $(".chosen-select").chosen({ width: "95%" });
    $(function() {
        $( ".datepick" ).datepicker({ showButtonPanel: true, dateFormat: "yy-mm-dd"  });
    });
</script>