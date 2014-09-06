<!DOCTYPE html>
<html lang="en">
<Head>
<meta content="text/html; charset=utf-8">
<meta name="Raptor" content="Raptor Reporter">
<link rel="stylesheet" href="{$cssdir}/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="{$cssdir}/main.css">
<link rel="stylesheet" href="{$jsdir}/jquery-ui/jquery-ui.css">
<link rel="stylesheet" href="{$jsdir}/chosen/chosen.css">
<script type="text/javascript" src="{$jsdir}/jquery-1.9.1.js"></script>
</Head>
<body>
  <div class="navbar navbar-inverse navbar-fixed-top" role="navigation" id="header">
   {$header}
  </div>
  <div class="container-fluid" id="menu">
    <div class="row">
     <div class="col-sm-3 col-md-2 sidebar">   
      {$sidebar}
     </div>
    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main" id="center">
      {$content}
    </div>
    </div>
  </div>

</body>
<script type="text/javascript" src="{$jsdir}/md5.js"></script>
<script type="text/javascript" src="{$jsdir}/html.js"></script>
<script type="text/javascript" src="{$jsdir}/forms.js"></script>
<script type="text/javascript" src="{$jsdir}/main.js"></script>
<script type="text/javascript" src="{$jsdir}/jquery-ui/jquery-ui.js"></script>
<script type="text/javascript" src="{$jsdir}/chosen/chosen.jquery.js"></script>
</html>