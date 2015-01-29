/*
 ** jQuery lightbox
 */
 
(function($) {

    $.fn.lightbox=function(image) {
        //$('a.lightbox').click(function(){
            var windowHeigth = window.innerHeight || $(window).height(), // make it work on ipad & android
            windowWidth  = window.innerWidth  || $(window).width();
            
            //hide scrollbars
            //$('body').css('overflow-y', 'hidden');
            
            $('<div id="overlay"></div>')
                //.css('top', $(document).scrollTop())
                .css('opacity', '0')
                .animate({'opacity': '0.7'}, 'slow')
                .appendTo('body');
            
            $('<div id="lightbox"></div>')
                .hide()
                .appendTo('body');
            
            $('<img>')
                .attr('src', image)//$(this).attr('href'))
                .css({
                    'max-height': windowHeigth, 
                    'max-width':  windowWidth
                })
                .load(function() {
                    $('#lightbox')
                        .css({
                            'top':  (windowHeigth - $('#lightbox').height()) / 2,
                            'left': (windowWidth  - $('#lightbox').width())  / 2
                        })
                    .fadeIn();
                })
                .appendTo('#lightbox');
            
            //close the image by clicking in the #lightbox or #overlay
            $('#overlay, #lightbox').click(function() {
                $('#overlay, #lightbox').remove();
            });
            
            //the image can also be closed by pressing the escape key
            $(document).keydown(function(event) {
            if (event.keyCode == 27 ) {
                $('#overlay, #lightbox').remove();
            }
        });
            
            return false;
        //});
    }
})(jQuery); 