<?php
/**
 *This is a Morrígan pagecontroller.
 *
 *
 */
 
//Include the essential config-file wich also creates the $morrigan variable with its defaults.
include(__DIR__.'/config.php'); 

// Do it and store it all in variables in the Morrígan container.
$morrigan['title'] = "Installation";

$morrigan['main'] = <<<EOD
<h1>Ladda ned våra jquery plugin</h1>

<p>1. Ladda ned följande fil</p>
<p><a href="zips/jqueryplugins.zip">Download zip file</a></p>

<p><strong>Instruktioner</strong></p>

<p>2. Lägg till plugin efter din jquery-file i mall/footer.php, så här:</p>
<pre>
&lt;script src="dinsökvägirelationtillmallfooter/jquery.js"&gt;&lt;/script&gt;
&lt;script src="dinmapp/lightbox.js"&gt;&lt;/script&gt;
</pre>

<br/>

<p>och 3. Använd följande exempelkod eller liknande i din index fil för att lägga till dina egna bilder:</p>
<pre>
&lt;img class='thumbnail lightbox' src='img/2.jpg' alt='' width='200px'/&gt;
</pre>

<img class='thumbnail lightbox' src='img/a-little-thank-you.jpg' alt='' width='200px'/>




EOD;

// Finally, leave it all to the rendering phase of Morrígan.
include(MORRIGAN_THEME_PATH); 