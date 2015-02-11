/**
 * Work with strings.
 */
$(document).ready(function(){
    
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