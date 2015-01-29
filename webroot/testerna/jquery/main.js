/**
 * Work with strings.
 */
$(document).ready(function(){
    
    //exampel 1
    $('#box1 h1, #box1 p, #box1 img').click(function() {
        $(this).toggleClass('dark');
        console.log("toggle!");
    });
    
    
    //exampel 2
    $('#box2').click(function() {
        $(this).toggleClass('pink');
        console.log("change backgroung pink");
    });
    
    $( '#box2 img' ).click(function( event ) {
        //event.stopPropagation();
        $(this).toggleClass('smalimg');
        console.log("make img smaler");
    });
    
    
    //exampel 3
    var addColor = function() {
        $('<div></div>')
        .addClass('color')
        .css('background-color', $('#colorcode').val())
        .insertAfter('#palette')
        .click(function() {
            $(this).remove();
            console.log('removing color');
        });
        console.log('Adding color' + $('#colorcode').val());
    };
    
    $('#button').click(addColor);
    $('#colorcode').keypress(function(event) {
        if ( event.which == 13 ) {
            event.preventDefault();
            addColor();
        }
    });
    
    
    //exampel 4
    var imgSize = function() {
        var imgWidth = $('#img4').width(),
        imgHeight = $('#img4').height();
        $('#dimension').text(imgWidth + ' x ' + imgHeight);
        console.log('Print out current dimensions on the img');
    };
    
    imgSize();
    
    $( '#addWidth' ).click(function() {
        $('#img4').css('width', '+=10px');
        imgSize();
        console.log('Making img wider');
    });
    
    $( '#removeWidth' ).click(function() {
        $('#img4').css('width', '-=10px');
        imgSize();
        console.log('Making img less wider');
    });
    
    $( '#addHeight' ).click(function() {
        $('#img4').css('height', '+=10px');
        imgSize();
        console.log('Making img higher');
    });
    
    $( '#removeHeight' ).click(function() {
        $('#img4').css('height', '-=10px');
        imgSize();
        console.log('Making img lower');
    });
    
    
    //Example 5
    $( '#slideToggle' ).click(function() {
        $('#slideImg').slideToggle();
        console.log('slide img');
    });
    
    $( '#fadeToggle' ).click(function() {
        $('#fadeImg').fadeToggle();
        console.log('fade img');
    });
    
    
    //example 6
    $('a.lightbox').click(function(){
        var windowHeigth = window.innerHeight || $(window).height(), // make it worjk on ipad & android
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
            .attr('src', $(this).attr('href'))
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
    });
    
    
    //example 7
    var galleryInit = function() {
        var current = null;
        
        $('.gallery-all img').each(function() {
            $(this)
                .attr('src', $(this).attr('src1'))
                .click(function() {
                    if(!current) {
                        current = this;
                        console.log('Set current');
                    } else {
                        $(current).toggleClass('selected');
                        current = this;
                        console.log('Toogled current');
                    }
                $(this).toggleClass('selected');
                $('.gallery-current img').attr('src', $(this).attr('src1'))
                console.log('Click on mini image.')
                });
            console.log('Gallery image was initiated.');
        });
        
        $('.gallery-all img').first().trigger('click');
    };
    
    galleryInit();
    
    
    //example 8
    var slideshowInit = function() {
        var numberImages =  $('.slideshow img').length,
        currentImage = numberImages - 1,
        zIndex = parseInt($('.slideshow').css('z-index')), // Get current z-index for the slideshow and stack all images above this z-index
        currentZIndex = zIndex, // To play/pause the slideshow intervall
        intervallId = null;
      
        // Function to rotate images
        var rotateImages = function() {
        // Fade out current image and reorder z-index
            $('.slideshow img')
            .eq(currentImage)
            .fadeOut('slow', function() {
                $(this)
                .css('z-index', zIndex)
                .fadeIn(0)
                .siblings().each(function() {
                    $(this).css('z-index', ((parseInt($(this).css('z-index')) - zIndex + 1) % numberImages + zIndex));
                });
            });
        currentImage = (numberImages + currentImage - 1) % numberImages;
        console.log('Rotating pictures in slideshow.' + currentImage);
        };
    
        // Fore each image, set it up.
        $('.slideshow img')
            .each(function() { 
                // Use i to set the z-index of the image, stack them on top of each other
                $(this)
                    .attr('src', $(this).attr('src1'))
                    .css('z-index', currentZIndex++);
            })
        
            .click(function() {rotateImages();});

        $('#box8 .play').click(function() {
            intervallId = setInterval(function() {rotateImages();}, 4000);
            console.log("Clicked to start slideshow.");
        });
    
        $('#box8 .stop').click(function(event) {
            clearInterval(intervallId);
            console.log("Clicked to stop slideshow.");
        });
   
        console.log("Slideshow was initiated.");
    };
  
    slideshowInit();
    
    
    
    
//example 9
/*$('a.lightbox').click(function(){
    $(this).lightbox($('a.lightbox').attr('href'));
});

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
})(jQuery);*/
    
});


