<?php
/**
 *This is a Morrígan Group pagecontroller.
 *
 *
 */
 
//Include the essential config-file wich also creates the $morrigan variable with its defaults.
include(__DIR__.'/config.php'); 

// Do it and store it all in variables in the Morrígan container.
$morrigan['title'] = "Lightbox plugin";

$morrigan['main'] = <<<EOD
<h1>Lightbox jQuery plugin</h1>
<p>Detta är min jQuery Lighbox plugin som på ett snyggt sätt visar dina bilder i orginalstorlek när en besökare har klickat på dom.</p>

<h2>Demo</h2>
<p>Prova pluginen genom att klicka på bilden här nedan.</p>
<img src="http://lorempixel.com/400/400/nature/7/" alt="" class="lightbox" style="width:200px;height:200px;"/>

<h2>Installation</h2>
<p>1. Ladda hem filen med javascriptet <a href="js/lightbox/jquery.lightbox.js">HÄR</a>. Döp den till jquery.lightbox.js</p>
<p>2. Ladda hem css-filen <a href="js/lightbox/lightbox.css">HÄR</a>. Döp filen till lightbox.css.</p>
<p>3. Inkludera filerna i din html-kod. T.ex: <br/>
    <code> &lt;script src='jquery.lightbox.js'&gt; </script> </code> <br />
    och <br/>
    <code> &lt;link rel='stylesheet' type='text/css' href='lightbox.css'/&gt; </code> </p>
<p>4. Inkludera sedan följande kod: <br/>
    <code>
        &lt;script&gt <br />
            $(document).ready(function(){ <br />
                $('img.lightbox').click(function(){ <br />
                    $(this).lightbox($('img.lightbox').attr('src')); <br />
                }); <br />
            }); <br />
        &lt;/script&gt
    </code>
</p>
<p>5. Till sist lägger du bara till <code>class="lightbox"</code> på de img-taggar där du vill använda Lightbox.</p>
EOD;




// Finally, leave it all to the rendering phase of Morrígan.
include(MORRIGAN_THEME_PATH); 