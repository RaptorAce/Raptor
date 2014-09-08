<ul class="nav nav-sidebar">
  <li class="active"><a href="{$basedir}home/overview">Overview</a></li>
  <li><a href="{$basedir}home/reports">Reports</a></li>
  <li><a href="#">Funcionário</a></li>
<li><a href="#">Export</a></li>
<script>
    $('ul.nav > li').click(function(){
      $(this).parent('ul').find('li').removeClass('active');
      $(this).addClass('active');
    });
</script>