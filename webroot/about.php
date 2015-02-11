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
<p>I dagsläget har Morrígan dessa tre produkter, ett plugin för lightbox, ett script for bildgalleri och ett bildspel script. Alla kan använda våra produkter, eftersom det har hela tiden varit grunden för Morrígan, att skapa enkla, flexibla och lätta att installera, anpassa och använda plugin och script som vemsomhelst som behöver de kan använda dessa gratis tillsvidare. Sedan kan man välja mer avancerade lösningar när man är redo.</p>
<p>Lightboxen öppnas då man klickar på den utvalda bilden för att få bilden i fokus men behålla sidans innehåll nedsläkt i bakgrunden och granska endast bilden. Galleriet visar en bild i taget (helst ska thumbnails vara mindre än versionen som visas upp när man klickar på en bild). Och bildspelet spelas upp automatiskt, och detta script – liksom de två andra - kan användas till så mycket, allt från att visa upp städer, natur, landskap, bostäder, böcker, museiföremål, och kläd eller spel eller filmkollektion. Vad ni än har att erbjuda just era kunder! Det går också att istället för att länka till en katalog med bildspel, använda varje bild samt lägga till en länk till bildens sida. Till exempel om bilden visar en annons för graviditetskläder, så kan man lägga till en länk i bilden så att när man klickar på bilden omdirigeras man till sidan med mode för gravida. Vi jobbar i skrivande stund på en sådan plugin och hoppas kunna erbjuda er detta inom en snar framtid!</p>
<p>Instruktionerna som medföljer på sidan <i>installation</i> är precis som våra script och plugin enkla och lätta att följa eftersom de är riktade mot absolut nybörjare med liten till ingen vana som helst med webbprogrammering eller webbdesign, och fungerar med vilket operativsystem, webbläsare och utvecklingsmiljö man än använder. </p>

<h2>Konkurrens</h2>
<p>Vid olika sökningar för liknade erbjudanden (plugin och scripter) hittade vi sidor vars instruktioner inte ens vi här har motivation, tid eller energi att följa. Flera av de webbplatser som testades krävde att man skulle registrera sig, två (minst) sålde plugins som tjänster så det var inte gratis och vi delar inte målgrupp, och andra hade instruktioner som vi ansåg skulle vara för svåra för vår målgrupp att följa om de är nybörjare. Så dessa är vad alla där ute har att välja på, dessa webbplatser och dyra experter. Det är ju inte alla som vill ge ut sina personliga uppgifter till ett register som sparas hur länge somhelst, när man kanske kommer att besöka sidan upp till två gånger. Det är inte heller ansvarsfullt att ge ut bankkortsdetaljer på en sådan sidan, men det är exakt vad dessa sidor är efter. </p>
<p>Experter är experter av många anledningar och de behöver självklart också lön att leva på, men vår mål grupp – små eller nya företag och organisationer – har inte råd med dessa, inte än i alla fall. Så vi vill att de ska komma till oss för att få hjälp på traven med att introducera deras verksamhet online, och med nya deras online verksamhet, NO STRINGS ATTACHED, tills de växer och utvecklas så pass mycket att de själva kan antingen skapa egna plugins/scripter eller anställa webbprogrammerare som kan skapa avancerade och specialutformade plugins till deras webbplatser. </p>

<h2>Utvecklingsplan</h2>
<p>Vår utvecklingsplan är att bygga smidigare och fler plugin och script, med fler mindre funktioner som är avändbara, och så småningom bygga hela webbplatser med dessa funktioner i användning som exempel, och sedan göra de tillgängliga för våra klienter, komplett med installationsguider.</p>

<p>Ett par exempel på hur vi planerar att utveckla vår nuvarande lightbox plugin är att utveckla en kombination av lightboxen och bildgalleriet och funktion för att bläddra fram och tillbaks bland bilderna i lightboxen, och senare även utveckla en lightbox plugin för videoklipp – denna kan man använda till att visa era besökare och kunder reklamklipp, boktrailers, filmtrailers, modeklipp, runway-klipp, filmsnuttar, intervjuer, m.m.! Spännande, va?</p>
<p>Några exempel på features som vi vill lägga till på vår gallery/bildgalleri script är även här funktion för att bläddra fram och tillbaka mellan bilderna mer smidigare via framåt och bakåt pilar på var sin sida om bilden. Dessutom vill vi anpassa samtliga bildernas storlek i bildgalleriet; just nu visas alla thumbnails i samma anpassade storlek och vi vill implementera en anpassad storlek på bilderna som man visar i galleriet – på det sättet kan man enkelt använda de bilder man behöver utan att behöva sitta och ändra i varje bilds storlek, vilket ibland inte funkar som tänkt och bilden kan se konstig ut.</p>
<p>Features som vi vill lägga till på vår nuvarande bildspel script är en  spela och paus funktion, funktion för att visa hur många bilder som finns i bildspelet och vilken bild man granskar i den ordningen just nu. Vi funderar också på huruvida vi kommer att satsa på en funktion för att lägga till ljud/musikspår på bildspel scriptet. Troligen kommer även det senare, för er som är intresserade.</p>

<p>Vi har alltså inga konkurrenter, eftersom vi delar med oss vad vi kan, när vi kan, med de som behöver oss. Vi tar inte betalt för våra tjänster eftersom det är av rent goodwill vi gör det här (vi har andra jobb) eller har dolda motiv, och det finns ingen annan som kan säga samma sak.</p>




EOD;

// Finally, leave it all to the rendering phase of Morrígan.
include(MORRIGAN_THEME_PATH); 