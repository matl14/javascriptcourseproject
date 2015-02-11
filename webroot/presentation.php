<?php
/**
 *This is a Morrígan pagecontroller.
 *
 *
 */
 
//Include the essential config-file wich also creates the $morrigan variable with its defaults.
include(__DIR__.'/config.php'); 

// Do it and store it all in variables in the Morrígan container.
$morrigan['title'] = "Våra script och jQuery plugin";

$morrigan['main'] = <<<EOD
<h1>Våra script och jQuery plugin</h1>

<p>Här är listan på alla våra nuvarande script och plugin. Ser ni något som verkar intressant? Det är bara att klicka på länken och se hur scriptet eller pluginet fungerar! Just nu är listan kort men vi jobbar på att utveckla fler. Saknar ni något? Har ni några önskemål får ni gärna höra av er, lika så med tips och förslag på förbättringar! Obs. att ni kommer att omdirigeras till scriptets eller pluginets egna sida när ni klickar på ert val i listan. För att komma tillbaka till denna listan kan ni klicka bakåt i webbläsaren eller återigen klicka "presentation" i huvudmenyn ovan.</p>

<ul>
<li><a href="presentation/lightboxplug/lightboxplug.php">Lightbox plugin</a></li>
<li><a href="presentation/galleryscript/galleryscript.php">Bildgalleri script</a></li>
<li><a href="presentation/slideshowscript/slideshowscript.php">Slideshow script</a></li>

<p>Fler tillkommer...</p>

</ul>



EOD;

// Finally, leave it all to the rendering phase of Morrígan.
include(MORRIGAN_THEME_PATH); 