<?php $title='Presentation av Slideshow scriptet'; ?>
<?php $path=__DIR__; include(__DIR__ . '/../mall/header.php'); ?> 



<div id='box8' class="box">
    <h1>Presentation av Slideshow scriptet</h1>
    <h4>Ett bildspel till er hemsida!</h4>
    <p>Detta scriptet kan användas till så mycket, allt från att visa upp städer, natur, landskap, bostäder, böcker, museumföremål, och kläd eller spel eller filmkollektion. Vad ni än har att erbjuda era kunder! Det går också att istället för att länka till en katalog med bildspel, använda varje bild samt lägga till en länk till bildens sida. Till exempel om bilden visar en annons för graviditetskläder, så kan man lägga till en länk i bilden så att när man klickar på bilden omdirigeras man till sidan med mode för gravida. Vi jobbar i skrivande stund på ett sådant script och hoppas kunna erbjuda er detta inom en snar framtid, samt som en plugin!</p>
    <div id="photos">
    <?php foreach (array_diff(scandir('img/slideshow/'), array('..', '.')) as $src) : ?>
        <img src='img/slideshow/<?=$src?>' alt='img'/>
    <?php endforeach; ?>
    </div>
</div>


<?php $path=__DIR__; include(__DIR__ . '/../mall/footer.php'); ?> 