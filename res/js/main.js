$(document).ready(function(){

    $('a[href]').click(function(a){
        a.preventDefault();
        Html.Post($(this).attr('href'),'',function(r){
            eval(r);
            return false;
        });
    });
});