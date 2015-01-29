/**
 * Place your JS-code here.
 */

(function($) {
  $.fn.lightbox = function() {

  var windowHeight = window.innerHeight || $(window).height, // works on tablets
  windowWidth = window.innerWidth || $(window).width();

  // displays overlay
  $('<div id="overlay"></div>')
  .css('opacity', 0)
  .animate({'opacity' : '0.9'}, 'fast')
  .appendTo('body');

  //creating light-box 
  $('<div id="lightbox"></div>')
  .hide()
  .appendTo('body');

  // this displays an enlargened image onload
  $('<img>')
  .attr('src', $(this).attr('src'))
  .css({
    'max-height' : windowHeight/1.5,
    'max-width' : windowWidth
  })
  .load(function() {
    $('#lightbox')
    .css( {
      'top' : (windowHeight - $('#lightbox').height()) / 2,
      'left': (windowWidth  - $('#lightbox').width())  / 2
    })
    .fadeIn();
  })
  .appendTo('#lightbox');

  // closing
  $('#overlay, #lightbox').click(function() {
    $('#overlay, #lightbox').remove();
  });
  console.log('Displaying image in lightbox');
}

}) (jQuery);