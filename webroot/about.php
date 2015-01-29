<?php
/**
 *This is a Morrígan pagecontroller.
 *
 *
 */
 
//Include the essential config-file wich also creates the $morrigan variable with its defaults.
include(__DIR__.'/config.php'); 

// Do it and store it all in variables in the Morrígan container.
$morrigan['title'] = "Om";

$morrigan['main'] = <<<EOD
<h1>Om oss, er och vad vi har att erbjuda er</h1>

<h2>I dagsläget</h2>
<p>I dagsläget har Morrígan dessa tre produkter, plugins för lightbox, bildgalleri och bildspel. Alla kan använda våra produkter, eftersom det har hela tiden varit grundin för Morrígan, att skapa enkla, flexibla och lätta att installera, anpassa och använda plugins som vemsomhelst som behöver de kan använda dessa gratis tillsvidare.</p>
<p>Lightboxen öppnas då man klickar på den utvalda bilden för att få bilden i fokus men behålla sidans innehåll nedsläkt i bakgrunden och granska endast bilden. Galleriet visar en bild i taget (helst ska thumbnails vara mindre än versionen som visas upp när man klickar på en bild). Och bildspelet spelas upp automatiskt, och denna plugin – liksom de två andra - kan användas till så mycket, allt från att visa upp städer, natur, landskap, bostäder, böcker, museiföremål, och kläd eller spel eller filmkollektion. Vad ni än har att erbjuda era kunder! Det går också att istället för att länka till en katalog med bildspel, använda varje bild samt lägga till en länk till bildens sida. Till exempel om bilden visar en annons för graviditetskläder, så kan man lägga till en länk i bilden så att när man klickar på bilden omdirigeras man till sidan med mode för gravida. Vi jobbar i skrivande stund på en sådan plugin och hoppas kunna erbjuda er detta inom en snar framtid!</p>
<p>Instruktionerna som medföljer på sidan <i>installation</i> är precis som våra plugins enkla och lätta att följa eftersom de är riktade mot absolut nybörjare med liten till ingen vana som helst med webbprogrammering eller webbdesign, och fungerar med vilket operativsystem,  webbläsare och  utvecklingsmiljö man än använder.  </p>

<h2>Konkurrens</h2>
<p>Vid olika sökningar för liknade plugin hittade vi sidor vars instruktioner inte ens vi har motivation, tid eller energi att följa. Flera av de webbplatser som testades krävde att man skulle registrera sig, två (minst) sålde plugins som tjänster så det var inte gratis och vi delar inte målgrupp, och andra hade instruktioner som vi ansåg skulle vara för svåra för vår målgrupp att följa om de är nybörjare. Så dessa är vad alla där ute har att välja på, dessa webbplatser och dyra experter. Experter är experter av många anledningar och de behöver självklart också lön att leva på, men vår mål grupp – små eller nya företag och organisationer – har inte råd med dessa, inte än i alla fall. Så vi vill att de ska komma till oss för att få hjälp på traven med att introducera deras verksamhet online, och med nya deras online verksamhet, tills de växer och utvecklas så pass mycket att de själva kan antingen skapa egna plugins eller anställa webbprogrammerare som kan skapa avancerade och specialutformade plugins till deras webbplatser. </p>

<h2>Utvecklingsplan</h2>
<p>Vår utvecklingsplan är att bygga smidigare plugins, med fler mindre funktioner som är avändbara, och så småningom bygga hela webbplatser med dessa funktioner i användning som exempel, och sedan göra de tillgängliga för våra klienter, komplett med installationsguider.</p>

<p>Vi har alltså inga konkurrenter, eftersom vi delar med oss vad vi kan, när vi kan, med de som behöver oss. Vi tar inte betalt för våra tjänster eftersom det är av rent goodwill vi gör det här (vi har andra jobb) eller har dolda motiv, och det finns ingen annan som kan säga samma sak.</p>




EOD;

// Finally, leave it all to the rendering phase of Morrígan.
include(MORRIGAN_THEME_PATH); 