$(document).ready(function() {  
    $('ul#topmenu-list a').tipTip({delay: 0});
    
    $('ul#topmenu-list a').append('<span class="hover">*</span>').each(function () {  
        var $span = $('> span.hover', this).css('opacity', 0);
        $(this).hover(function () {  
            $span.stop().fadeTo(500, 1); //Change the number 500 to change the speed of the Fade In
        }, function () {  
            $span.stop().fadeTo(500, 0); //Change the number 500 to change the speed of the Fade Out
        });  
    });
});