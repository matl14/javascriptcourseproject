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
// Box 6
 /**
 * Place your JS-code here.
 */
 
$(document).ready(function() {
    'use strict';
    $('.lightbox').click(function() {
    $(this).lightbox();
    });
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
    // Box 8 
  function rotatePics(currentPhoto) {
      var numberOfPhotos = $('#photos img').length;
      currentPhoto = currentPhoto % numberOfPhotos;
      $('#photos img').eq(currentPhoto).fadeOut('slow', function() {
          // re-order the z-index
          $('#photos img').each(function(i) {
            $(this).css(
              'zIndex', ((numberOfPhotos - i) + currentPhoto) % 
        numberOfPhotos
            );
          });
          
          $(this).show(); 
          setTimeout(function() {rotatePics(++currentPhoto);}, 4000);
        });
  }
  
  rotatePics(1);
}); 