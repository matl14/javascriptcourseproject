<?php
/**
 *This is a Morrigan Group sourcepage pagecontroller.
 *
 *
 */
 
//Include the essential config-file wich also creates the $morrigan variable with its defaults.
include(__DIR__.'/config.php'); 

// Add style for csource
$morrigan['stylesheets'][] = 'css/source.css';

// Do it and store it all in variables in the Morrígan container.
$morrigan['title'] = "Morrígan Group";

// Create the object to display sourcecode
//$source = new CSource();
$source = new CSource(array('secure_dir' => '..', 'base_dir' => '..'));

// Do it and store it all in variables in the Morrígan container.
$morrigan['title'] = "Visa källkod";
$morrigan['main'] = "<h1>Visa källkod</h1>\n" . $source->View();

// Finally, leave it all to the rendering phase of Morrígan.
include(MORRIGAN_THEME_PATH); 