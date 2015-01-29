<?php
/**
 *This is a Morrígan pagecontroller.
 *
 *
 */
 
//Include the essential config-file wich also creates the $morrigan variable with its defaults.
include(__DIR__.'/config.php'); 

// Do it and store it all in variables in the Morrígan container.
$morrigan['title'] = "Presentation";

$morrigan['main'] = <<<EOD
<h1>Presentation av våra erbjudanden (plugins)</h1>

<p>Här har jag samlat alla länkar till de övningar vi gjorde i kmom01</p>




<div id='box6' class="box">
    <a href="http://lorempixel.com/200/200/nature/7/" class="lightbox"><img src="http://lorempixel.com/200/200/nature/7/" alt=""/></a>
    <h1>6. En lightbox för att visa bilder</h1>
</div>


<div id='box7' class="box">
    <h1>7. Ett galleri av bilder</h1>
    <div class="gallery">
        <div class="gallery-current"><img/></div>
        <div class="gallery-all">
            <img src1="http://lorempixel.com/600/370/nature/1/" alt=""/>
            <img src1="http://lorempixel.com/600/370/nature/2/" alt=""/>
            <img src1="http://lorempixel.com/600/370/nature/3/" alt=""/>
            <img src1="http://lorempixel.com/600/370/nature/4/" alt=""/>
            <img src1="http://lorempixel.com/600/370/nature/5/" alt=""/>
            <img src1="http://lorempixel.com/600/370/nature/6/" alt=""/>
            <img src1="http://lorempixel.com/600/370/nature/7/" alt=""/>
            <img src1="http://lorempixel.com/600/370/nature/8/" alt=""/>
        </div>
    </div>
</div>

<div id='box8' class="box">
    <h1>8.Slideshow</h1>
    <div class="slideshow">
        <img src1="http://lorempixel.com/600/370/nature/1/" alt=""/>
        <img src1="http://lorempixel.com/600/370/nature/2/" alt=""/>
        <img src1="http://lorempixel.com/600/370/nature/3/" alt=""/>
        <img src1="http://lorempixel.com/600/370/nature/4/" alt=""/>
        <img src1="http://lorempixel.com/600/370/nature/5/" alt=""/>
        <img src1="http://lorempixel.com/600/370/nature/6/" alt=""/>
        <img src1="http://lorempixel.com/600/370/nature/7/" alt=""/>
        <img src1="http://lorempixel.com/600/370/nature/8/" alt=""/>
    </div>
    <div class="buttons">
        <img src="../../img/play.png" class="play" alt="play slideshow"/>
        <img src="../../img/stop.png" class="stop" alt="stop slideshow"/>
    </div>
</div>



EOD;

// Finally, leave it all to the rendering phase of Morrígan.
include(MORRIGAN_THEME_PATH); 