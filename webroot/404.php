<?php 
/**
 * This is a Morrígan pagecontroller.
 *
 */
// Include the essential config-file which also creates the $anax variable with its defaults.
include(__DIR__.'/config.php'); 
 
 
// Do it and store it all in variables in the Anax container.
$morrigan['title'] = "404";
$morrigan['header'] = "";
$morrigan['main'] = "This is a Morrígan 404. Document is not here.";
$morrigan['footer'] = "";
 
// Send the 404 header 
header("HTTP/1.0 404 Not Found");
 
// Finally, leave it all to the rendering phase of Morrígan.
include(MORRIGAN_THEME_PATH); 