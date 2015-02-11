/**
 * Place your JS-code here.
 */
 
$(document).ready(function() {
    'use strict';
    $('.lightbox').click(function() {
    $(this).lightbox();
    });
});



/**
* This shifts the font
*/
  (function($) {
    $.fn.shiftFont = function(options) {
      options = $.extend({}, $.fn.shiftFont.defaults, options);
      $.fn.shiftFont.current = ($.fn.shiftFont.current + 1) % options.fontFamily.length;
     return this.each(function() {
        $(this).css('font-family', options.fontFamily[$.fn.shiftFont.current]);
      });
    };

    $.fn.shiftFont.defaults = {
      'fontFamily': ['sans-serif', 'serif'] 
    }
  
    $.fn.shiftFont.current = 0;
    console.log('Added function shiftFont() to jQuery object as plugin.');
  }) (jQuery);

  $('#box9 h1, #box9 p').click(function() {
    $('#box9 h1, #box9 p').shiftFont({
      'fontFamily': ['monospace', 'cursive', 'fantasy', 'forte', 'edwardian']
    });
  });