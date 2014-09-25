<!--
Arquivo Headers.tpl
Arquivo template carregado no inicio do site
Gera o Header, menu de cabeçalho

-->

<div class="container-fluid">

<!-- -------Botão Brand, à esquerda-------- -->
   <div class="navbar-header">
     <a class="navbar-brand" href="#">Raptor Reporter</a>
   </div>

<!-- -----------Menu à direita------------- -->
   <div id="headmenu" class="navbar-collapse collapse">
    <ul class="nav navbar-nav navbar-right">
     <li><a href="#">Settings</a></li>
     <li><a href="#">Ajuda</a></li>
     <li><a href="{$basedir}home/logout">Sair</a></li>
    </ul>
   </div>

</div>
    
<script>
    Html.Actions('#headmenu');
</script>