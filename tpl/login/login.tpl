<!--
Arquivo Home.tpl
Arquivo template carregado no primeiro acesso ao site
Carrega os scripts e os css que serão usado para o site
E inicia as 'DIV' principais

-#HEADER
-Container-fluid
 >#SIDEBAR
 >#CENTER

O site então é carregado em cima dessar 'DIV' em outros arquivos templates

Todo o conteúdo do site, e também na troca de aba, são feito em html::replace em cima dessas 'DIV'

-->


<!DOCTYPE html>
<html lang="en">
<Head>

<meta content="text/html; charset=utf-8">
<meta name="Raptor" content="Raptor Reporter">

<!-- -------------------CSS----------------------- -->
<link rel="stylesheet" href="{$cssdir}/bootstrap/css/bootstrap.css">
<link rel="stylesheet" href="{$cssdir}/bootstrap/css/bootstrap-theme.css">
<link rel="stylesheet" href="{$jsdir}/jquery-ui/jquery-ui.css">
<link rel="stylesheet" href="{$jsdir}/chosen/chosen.css">
<link rel="stylesheet" href="{$cssdir}/login.css">

<!-- ------------------JQuery--------------------- -->
<script type="text/javascript" src="{$jsdir}/jquery-1.9.1.js"></script>

<!-- ----------------HTML Script------------------ -->
<script type="text/javascript" src="{$jsdir}/html.js"></script>
<script type="text/javascript" src="{$jsdir}/login.js"></script>

</Head>

<body>
  <div class="container" id="login">
     <div class="result alert alert-danger alert-dismissible">
       <strong>Login Invalido</strong>
       <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
     </div>
     <form class="form-signin" action="{$basedir}login/logar">
      <h2 class="form-signin-heading">Logar</h2>
      <input class="form-control" type="text" name="user" placeholder="Usuario">
      <input class="form-control" type="password" name="pass" placeholder="Senha">
      <button type="submit" class="btn btn-primary btn-lg btn-block">Entrar</button>
     </form>
  </div>

</body>

<!-- ------------------JavaScripts----------------- -->

<script>
    Forms.Actions('#login');
    
    $('.close').click(function(){
        $('.result').hide();
    });
    
</script>
<script type="text/javascript" src="{$jsdir}/md5.js"></script>
</html>