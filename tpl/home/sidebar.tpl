<!--
Arquivo Sidebar.tpl
Arquivo template carregado no inicio do site
Gera a Sidebar

-Sidebar

-->

<ul class="nav nav-sidebar">
  <li class="active"><a href="{$basedir}home/overview">Overview</a></li>
  <li><a href="{$basedir}home/reports">Reports</a></li>
  <li><a href="{$basedir}home/funcionario">Funcionário</a></li>
</ul>

<!-- -------Scripts adicionais da sidebar--------- -->

<script>
    Html.Actions('#sidebar');
    $('ul.nav > li').click(function(){
      $(this).parent('ul').find('li').removeClass('active');
      $(this).addClass('active');
    });
</script>