      <div class="row">
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
      </script>