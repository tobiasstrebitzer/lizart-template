
$(function() {  
  $('ul#topmenu-list a').click(function(e) {
    loadResponder.loadPage($(this).attr('href'));
    e.preventDefault();  
  });
  loadResponder.loadPage("data.php?tag=home");
});


var loadResponder = {
    loading: false,
    fading: false,
    currentData: null,
    loadPage: function(href) {
        loadResponder.loading = true;
        loadResponder.fading = true;
        $('#content').fadeOut(500, this.fadeResult);
        $.get(href, this.loadResult);
        
    },
    loadResult: function(data) {
        loadResponder.currentData = data;
        loadResponder.loading = false;
        loadResponder.triggerBuild();
    },
    fadeResult: function() {
        loadResponder.fading = false;
        loadResponder.triggerBuild();
    },
    triggerBuild: function() {
        
        if(!loadResponder.loading && !loadResponder.fading) {
            $('#content').html($(loadResponder.currentData).find('div.blogitem'));
            $('#content').show();
            myFluidGrid.doLayout();
        }
    }
};


$(window).ready(function() {
    myFluidGrid.doLayout();
}).resize(function() {
    myFluidGrid.doLayout();
});

var myFluidGrid = {
    COLNUMBER : 2, // Minimum column number.
    COLMARGIN : 10, // Margin (in pixel) between columns/boxes.
    COLWIDTH : 238, // Fixed width of all columns.
    doLayout : function() {
        var self = this;
        var pointer = 0;
        var arr = [];
        var columns = Math.max(this.COLNUMBER, parseInt($('#content').innerWidth() / (this.COLWIDTH + this.COLMARGIN)));

        $('.blogitem').css('position', 'absolute').css('width', this.COLWIDTH  + 'px');
        $('.blogitem').each(function() {
            var tempLeft = (pointer * (self.COLWIDTH + self.COLMARGIN));
            $(this).css('left', $('#content').offset().left + tempLeft + 'px');

            var tempTop = 0;
            if (arr[pointer]) { tempTop = arr[pointer]; }

            $(this).animate({
                top: $('#content').offset().top + tempTop,
                opacity: 1
            },{
                duration: 1000,
                specialEasing: {
                    width: 'linear',
                    height: 'easeOutBounce'
                }
            });


            arr[pointer] = tempTop + $(this).outerHeight() + self.COLMARGIN;
            pointer++;
            if (pointer === columns) { pointer = 0; }
        });
    }
};