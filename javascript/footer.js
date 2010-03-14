$(function() {
    $(window).scroll(function(){
        var scrollTop = $(window).scrollTop();
        if(scrollTop != 0)
            $('img#logo').stop().animate({'opacity':'0.2'},400);
        else
            $('img#logo').stop().animate({'opacity':'1'},400);
    });
 
    $('img#logo').hover(
        function (e) {
            var scrollTop = $(window).scrollTop();
            if(scrollTop != 0){
                $('img#logo').stop().animate({'opacity':'1'},400);
            }
        },
        function (e) {
            var scrollTop = $(window).scrollTop();
            if(scrollTop != 0){
                $('img#logo').stop().animate({'opacity':'0.2'},400);
            }
        }
    );
});