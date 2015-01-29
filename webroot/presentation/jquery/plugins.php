<?php $title='Presentation av Lightbox, Gallery och Slideshow'; ?>
<?php $path=__DIR__; include(__DIR__ . '/../mall/header.php'); ?> 

<br>
    <hr>
<h2>Presentation av våra erbjudanden (plugins)</h2>

<p>Här nedan kan ni få se vilka plugins vi har just nu och hur de fungerar.</p>



<div id='box6' class="box">
    <h1>Lightbox</h1>
    <h4>En lightbox för att visa bilder.</h4>
 <p>Här är en användbar plugin som kan användas till allt möjligt, från privata hemsidor, till online shoppar och organisationer som vill displaya sina samlingar online.</p>
  <p>Man kan titta på förstorade bilder i lightbox effekten. Mycket användbart.</p>
  <br>
    
  <img class='thumbnail lightbox' src='img/1.jpg' alt='' width='200px'/>
  <img class='thumbnail lightbox' src='img/3.jpg' alt='' width='200px'/>
  <img class='thumbnail lightbox' src='img/6.jpg' alt='' width='200px'/>
  <img class='thumbnail lightbox' src='img/9.jpg' alt='' width='200px'/>
  <img class='thumbnail lightbox' src='img/10.jpg' alt='' width='200px'/>
  <img class='thumbnail lightbox' src='img/11.jpg' alt='' width='200px'/>
  <img class='thumbnail lightbox' src='img/12.jpg' alt='' width='200px'/>
  <img class='thumbnail lightbox' src='img/13.jpg' alt='' width='200px'/>
  <img class='thumbnail lightbox' src='img/westofireland.jpg' alt='' width='200px'/>

</div>


<div id='box7' class="box">
    <h1>Bildgalleri</h1>
    <h4>Ett galleri av bilder.</h4>
    <p>Klicka på de olika bilderna. Perfekt för att visa up er samling eller kollektion eller produkter, eller vadsomhelst. Rekommendation: alla bilder som används bör helst vara i samma storlek!</p>
    <div class="gallery">
        <div class="gallery-current"><img/></div>
        <div class="gallery-all">
  <img src1='img/1.jpg' width='400' height='300'/>
  <img src1='img/3.jpg' width='400' height='300'/>
  <img src1='img/6.jpg' width='400' height='300'/>
  <img src1='img/9.jpg' width='400' height='300'/>
  <img src1='img/10.jpg' width='400' height='300'/>
  <img src1='img/11.jpg' width='400' height='300'/>
  <img src1='img/13.jpg' width='400' height='300'/>
        </div>
    </div>
</div>

<div id='box8' class="box">
    <h1>Slideshow</h1>
    <h4>Ett bildspel till er hemsida!</h4>
    <p>Denna plugin kan användas till så mycket, allt från att visa upp städer, natur, landskap, bostäder, böcker, museumföremål, och kläd eller spel eller filmkollektion. Vad ni än har att erbjuda era kunder! Det går också att istället för att länka till en katalog med bildspel, använda varje bild samt lägga till en länk till bildens sida. Till exempel om bilden visar en annons för graviditetskläder, så kan man lägga till en länk i bilden så att när man klickar på bilden omdirigeras man till sidan med mode för gravida. Vi jobbar i skrivande stund på en sådan plugin och hoppas kunna erbjuda er detta inom en snar framtid!</p>
    <div id="photos">
    <?php foreach (array_diff(scandir('img/slideshow/'), array('..', '.')) as $src) : ?>
        <img src='img/slideshow/<?=$src?>' alt='img'/>
    <?php endforeach; ?>
    </div>
</div>


<?php $path=__DIR__; include(__DIR__ . '/../mall/footer.php'); ?> 