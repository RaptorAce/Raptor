<!DOCTYPE html>
<html lang="en">
<head>
<meta name="title" content="Meu site">
<link rel="stylesheet" href="/raptor/res/css/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="/raptor/res/css/main.css">
<script type="text/javascript" src="/raptor/res/js/jquery-1.9.1.js"></script>
</head>
<body>
  <div class="navbar navbar-inverse navbar-fixed-top" role="navigation" id="header">
   {$header}
  </div>
  <div class="container-fluid" id="menu">
    <div class="row">
      {$sidebar}
    </div>
    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main" id="center">
      {$content}
    </div>
  </div>

</body>
<script type="text/javascript" src="/raptor/res/js/md5.js"></script>
<script type="text/javascript" src="/raptor/res/js/html.js"></script>
<script type="text/javascript" src="/raptor/res/js/forms.js"></script>
<script type="text/javascript" src="/raptor/res/js/main.js"></script>
</html>