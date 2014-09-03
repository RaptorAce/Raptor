<head>
    <meta name="title" content="Meu site">
    <link rel="stylesheet" href="/raptor/res/css/main.css">
    <script type="text/javascript" src="/raptor/res/js/jquery-1.9.1.js"></script>
</head>
<body>
<div id="main">
    <div>
        <form action="/raptor/dev/encryptdata">
            <input type="text" name="host" placeholder="hostname">
            <input type="text" name="user" placeholder="username">
            <input type="text" name="pass" placeholder="password">
            <input type="text" name="db" placeholder="database">
            <input type="submit" value="Encrypt"/>
        </form>
    </div>
    <div>
        <form action="/raptor/dev/decryptdata">
            <textarea name="todecrypt"></textarea>
            <input type="submit" value="Decrypt"/>
        </form>
    </div>
    <div id="result">

    </div>
    <div id="createconn" style="display: none">
        <form action="/raptor/dev/makefile">
            <p><label>Create this connection</label></p>
            <p><label>Name:</label><input type="text" name="connname"></p>
            <input id="connstr" type="hidden" name="connstr" value="">
            <input type="submit" value="Create">
        </form>
    </div>
</div>
</body>
<script type="text/javascript" src="/raptor/res/js/md5.js"></script>
<script type="text/javascript" src="/raptor/res/js/html.js"></script>
<script type="text/javascript" src="/raptor/res/js/forms.js"></script>
<script type="text/javascript" src="/raptor/res/js/main.js"></script>

<script>
    Forms.Actions('#main');
    $('#result').bind('DOMSubtreeModified', function(){
        $('#connstr').val($('#result').text());
    });
</script>