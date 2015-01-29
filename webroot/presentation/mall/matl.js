/**
 * Helpers and tools to ease your JavaScript day.
 *
 * @author Mariana Torres bth20142015
 */
 
window.Matl = (function(window, document, undefined ) {
  var Matl = {};
  
  /**
   * Generate a random number.
   * @param min the smallest possible number
   * @param max the largest possible number
   * @returns a random number where min >= number <= max
   */
  Matl.random = function (min, max) {
    return Math.floor(Math.random()*(max+1-min)+min);
  };

})(window, window.document);  