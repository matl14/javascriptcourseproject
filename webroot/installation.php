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
<h1>Ladda ned våra jquery plugin och script</h1>

<hr>

<h2>Lightbox plugin</h2>
<p>1. Ladda ned följande fil</p>
<p><a href="zips/lightboxjqueryplugin.zip">Download zip file</a></p>

<p><strong>Instruktioner</strong></p>

<p>2. Placera den nedladdade mappen med filerna i samma katalog där du har dina övriga filer så som config, index, din fil för startsidan, m.m.</p>

<p>3. Ändra sökväg och filnamn där det behövs. Till exempel: om du i din navigeringsmeny länkar till en sida som heter "kollektion" eller "samling" och dylikt som ska innehålla lightboxen, så kan du ändra namnet på den nedladdade filen som heter "lightboxplug" till "kollektion" eller "samling" eller något annat som passar er verksamhet bättre.

<p>4. Se till att du har fil för footern. Om icke, så kan du kika på hur vår ser ut här: <a href="http://www.student.bth.se/~matl14/javascript/kmom10/webroot/source.php?path=webroot/presentation/mall/footer.php">källkod för footer</a>.</p>

<p>5. Se till att du har fil för headern som innehåller länk till sidans standard stylesheet (layout/utseende). Om icke, så kan du kika på hur vår ser ut här: <a href="http://www.student.bth.se/~matl14/javascript/kmom10/webroot/source.php?path=webroot/presentation/mall/header.php">källkod för header</a>.</p>

<p>6. Lägg till plugin efter din jquery-file i mall/footer.php, så här:</p>
<pre>
&lt;script src="dinsökvägirelationtillmallfooter/jquery.js"&gt;&lt;/script&gt;
&lt;script src="dinmapp/lightbox.js"&gt;&lt;/script&gt;
</pre>

<p>7. Använd följande exempelkod eller liknande i din index fil för att lägga till dina egna bilder som du har i din img-mapp:</p>
<pre>
&lt;img class='thumbnail lightbox' src='img/2.jpg' alt='' width='200px'/&gt;
</pre>

<p>8. Ändra gärna layouten/utseendet för lightboxen i filen "style.less". Prova dig fram försiktigt om du är ovan, ta din tid. Annars kan du gärna behålla den nuvarande stylingen om den passar med er webbplats' vanliga tema.</p>

<hr>

<h2>Gallery script</h2>

<p>1. Ladda ned följande fil</p>
<p><a href="zips/galleryjavascript.zip">Download zip file</a></p>

<p><strong>Instruktioner</strong></p>
<p>2. Placera den nedladdade mappen med filerna i samma katalog där du har dina övriga filer så som config, index, din fil för startsidan, m.m.</p>

<p>3. Ändra sökväg och filnamn där det behövs. Till exempel: om du i din navigeringsmeny länkar till en sida som heter "kollektion" eller "samling" och dylikt som ska innehålla bildgalleriet, så kan du ändra namnet på den nedladdade filen som heter "galleryscript" till "kollektion" eller "samling" eller något annat som passar er verksamhet bättre.

<p>4. Se till att du har fil för footern. Om icke, så kan du kika på hur vår ser ut här: <a href="http://www.student.bth.se/~matl14/javascript/kmom10/webroot/source.php?path=webroot/presentation/mall/footer.php">källkod för footer</a>.</p>

<p>5. Se till att du har fil för headern som innehåller länk till sidans standard stylesheet (layout/utseende). Om icke, så kan du kika på hur vår ser ut här: <a href="http://www.student.bth.se/~matl14/javascript/kmom10/webroot/source.php?path=webroot/presentation/mall/header.php">källkod för header</a>.</p>

<p>Eftersom detta är en script så har du där allt som behövs för att få detta att fungera. Tänk bara på att länka till sidan med din gallery på dina andra sidor eller till exempel i din navbar/navigeringsmeny.</p>
<p>6. Ändra i följande exempelkod i "galleryscript" filen och ange mappen till era bilder och rätt sökväg:</p
<pre>
&lt;img src1='../img/1.jpg' width='400' height='300'/&gt;
</pre>

<p>7. Ändra gärna layouten/utseendet för bildgalleriet i filen "style.less". Prova dig fram försiktigt om du är ovan, ta din tid. Annars kan du gärna behålla den nuvarande stylingen om den passar med er webbplats' vanliga tema.</p>


<hr>

<h2>Slideshow script</h2>
<p>1. Ladda ned följande fil</p>
<p><a href="zips/slideshowjavascript.zip">Download zip file</a></p>

<p><strong>Instruktioner</strong></p>
<p>2. Placera den nedladdade mappen med filerna i samma katalog där du har dina övriga filer så som config, index, din fil för startsidan, m.m.</p>

<p>3. Ändra sökväg och filnamn där det behövs. Till exempel: om du i din navigeringsmeny länkar till en sida som heter "kollektion" eller "samling" och dylikt som ska innehålla slideshowen för att visa upp era bilder, så kan du ändra namnet på den nedladdade filen som heter "slideshowscript" till "kollektion" eller "samling" eller något annat som passar er verksamhet bättre.

<p>4. Se till att du har fil för footern. Om icke, så kan du kika på hur vår ser ut här: <a href="http://www.student.bth.se/~matl14/javascript/kmom10/webroot/source.php?path=webroot/presentation/mall/footer.php">källkod för footer</a>.</p>

<p>5. Se till att du har fil för headern som innehåller länk till sidans standard stylesheet (layout/utseende). Om icke, så kan du kika på hur vår ser ut här: <a href="http://www.student.bth.se/~matl14/javascript/kmom10/webroot/source.php?path=webroot/presentation/mall/header.php">källkod för header</a>.</p>

<p>Eftersom det här är ett script så har du allt i mappen som du laddar ner som behövs för att få det att fungera. Tänk bara på att länka till sidan med din slideshow på dina andra sidor eller till exempel i din navbar/navigeringsmeny, så att kunder/besökare lätt hittar dit!</p>

<p>6. Ändra i följande exempelkod i "slideshowscript" filen och ange mappen till era bilder och rätt sökväg:</p
<pre>
&lt;img src='img/slideshow/<?=$ src?>' alt='img'/&gt;
</pre>


<p>7. Ändra gärna layouten/utseendet för bildgalleriet i filen "style.less". Prova dig fram försiktigt om du är ovan, ta din tid. Annars kan du gärna behålla den nuvarande stylingen om den passar med er webbplats' vanliga tema.</p>

<hr>
<h2>Vilse?</h2>
<p>Ja, det är lätt hänt om man har aldrig pysslat med koder förr. Vi började alla från scratch. Men vi jobbar på att göra instruktionerna så noga och lätta som möjligt, under tiden, om ni känner att ni har svårt med det här, prova på att installera grunden till hela vår sida här på GitHub: <a href="https://github.com/matl14/javascriptcourseproject">klicka här för att komma till nedladdningen för sidan på GitHub</a>. Därefter kan ni ändra text och bilder, färger och former, och prova er fram tills ni har er egen webbplats. Till exempel, istället för våra sidor för installation och presentation så kan ni ändra namn och text så att ni har era egna sidor där för till exempel bildspel, info om er verksamhet, kontaktsida, öppettider, vadnivill. Kom ihåg att ändra våra texter, bilder och detaljer då ni kan komma att bryta copyright-lagar.</p>





EOD;

// Finally, leave it all to the rendering phase of Morrígan.
include(MORRIGAN_THEME_PATH); 