<?php $title='Lightbox, Gallery och Slideshow'; include(__DIR__ . '/../mall/header.php'); ?>
 
<div id='box1' class="box">
    <img src="http://lorempixel.com/200/200/nature/1/" alt=""/>
    <h1>1. Att välja ut element, hantera event och modifiera element</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
</div>


<div id='box2' class="box">
    <img src="http://lorempixel.com/200/200/nature/2/" alt=""/>
    <h1>2. Event propagering och att stoppa den</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
</div>

<div id='box3' class="box">
    <img src="http://lorempixel.com/200/200/nature/3/" alt=""/>
    <h1>3. Lägg till och ta bort element</h1>
    <form>
        <label>Färgkod i hexadecimal</label>
        <input type="text" id="colorcode">
        <input type="button" id="button" value="Lägg till">
    </form>
    <p id="palette">Färgpalett:</p>
</div>


<div id='box4' class="box">
    <img src="http://lorempixel.com/200/200/nature/4/" alt="" id="img4"/>
    <h1>4. Läsa och ändra storleken på ett element</h1>
    <p>Current dimensions (W x H): <span id="dimension"></span>
    <form>
        <label>Width:</label>
        <input type="button" id="addWidth" value="+">
        <input type="button" id="removeWidth" value="-"><br />
        <label>Height:</label>
        <input type="button" id="addHeight" value="+">
        <input type="button" id="removeHeight" value="-">
    </form>
</div>


<div id='box5' class="box">
    <img src="http://lorempixel.com/200/200/nature/5/" alt="" class="img5" id="fadeImg"/>
    <img src="http://lorempixel.com/200/200/nature/6/" alt="" class="img5" id="slideImg"/>
    <h1>5. Grundläggande animeringar</h1>
    <form>
        <input type="button" id="slideToggle" value="slideToggle">
        <input type="button" id="fadeToggle" value="fadeToggle">
    </form>
</div>


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

<div id='box9' class="box">
    <h1>9. En lightbox plugin</h1>
    <p>Klicka <a href="../../lightbox-plugin.php">HÄR</a> för att komma till min plugin. </p>
</div>
 
<?php $path=__DIR__; include(__DIR__ . '/../mall/footer.php'); ?> 