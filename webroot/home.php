<?php
/**
 *This is a Morrígan Group pagecontroller.
 *
 *
 */
 
//Include the essential config-file wich also creates the $morrigan variable with its defaults.
include(__DIR__.'/config.php'); 

// Do it and store it all in variables in the Morrígan container.
$morrigan['title'] = "Morrígan";

$morrigan['main'] = <<<EOD
<h1>Välkommen</h1>
<p>Morrígan Group startades i början av 2015 som en del av ett initiativ för att främja mindre företag och organisationer genom att hjälpa till att utveckla deras online verksamhet. </p>
        
<p>Det vi gör är att vi skapar plugins och scripter, som är användbara och idag används i de flesta välutvecklade professionella webbplatser så som bildspel (script), granskning av bilder i lightbox effekten (plugin), bildgalleri (script) m.m. Dessa kan bland annat användas för att visa upp kollektioner, samlingar, verk, eller till och med städer, eller boende till salu. Vadsomhelst. Väldigt användbart, eller hur?</p>
    
<p>Det vi har att erbjuda er just nu är dessa plugins och skripter och snart fler, alldeles grattis och med lättbeskrivlig guide till hur ni kan installera de på era hemsidor för att växa och utveckla ert online verksamhet. Vi riktar oss främst mot nystartade och mindre företag med ett få tal anställda som behöver en extra hand, lite hjälp och guidning på traven så här i början, men alla är såklart välkommna att ta hjälp av oss. Observera att våra plugin och scripter är enkla just för att de ska vara lätta att förstå och installera för nybörjare; vill man satsa på mer avancerade funktioner och har ej kunskapen så bör man kontakta webbprogrammerare. Ni kan också höra av er till oss för konsult.</p>

<p><center>Kontakta Morrígan Group Office:</center></p>
<ul>Telefon: 0123-567890. </ul>
<ul>Bridge Street, Dublin City, County Dublin, Irland. </u>

<p> Välkommna in till oss!</p>

<br>
<img class="moffice" src="img/office.jpg" alt="Bild på kontoret" width="375" height="200"/>
    <figcaption>
        <p>Morrígan Group office</p>
    </figcaption>
    </figure>
    <img class="moffice2" src="img/conference.jpg" alt="Konferensrummet" width="375" height="200"/>
    <figcaption>
        <p>Konferensrummet där all magin händer</p>
    </figcaption>
    </figure>

EOD;


// Finally, leave it all to the rendering phase of Morrígan Group.
include(MORRIGAN_THEME_PATH); 