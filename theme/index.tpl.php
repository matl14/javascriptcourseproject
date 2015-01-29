<!doctype html>
<html lang='<?=$lang?>'>
<head>
    <meta charset='utf-8'/>
    <title><?=get_title($title)?></title>
    <?php if(isset($favicon)): ?><link rel='shortcut icon' href='<?=$favicon?>'/><?php endif; ?>
    
    <?php foreach($stylesheets as $val): ?>
        <link rel='stylesheet' type='text/css' href='<?=$val?>'/>
    <?php endforeach; ?>
    
    <?php if(isset($jquery)):?><script src='<?=$jquery?>'></script><?php endif; ?>
    <?php if(isset($javascript_include)): foreach($javascript_include as $val): ?>
        <script src='<?=$val?>'></script>
    <?php endforeach; endif; ?>
    
    <!-- Lightbox plugin -->
    <script src='js/lightbox/jquery.lightbox.js'></script>
    <link rel='stylesheet' type='text/css' href='js/lightbox/lightbox.css'/>
    <script>
        $(document).ready(function(){
            $('img.lightbox').click(function(){
                $(this).lightbox($('img.lightbox').attr('src'));
            });
        });
    </script>
    
    <script src='<?=$modernizr?>'></script>
    <!-- <script src="../js/less.min.js"></script> -->
</head>
<body>
    <header id="top">
        <div id="head">
            <div id='logo'><?=$logo?></div>
            <nav id="nav_wrapp"><?=get_navbar($navbar)?></nav>
        </div>
    </header>
    
    <div id='wrapper'>
        <div id='main'><?=$main?></div>
        <div id='footer'><?=$footer?></div>
    </div>
    
    <?php if(isset($google_analytics)): ?>
        <script>
            var _gaq=[['_setAccount','<?=$google_analytics?>'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
    <?php endif; ?>
</body>
</html> 