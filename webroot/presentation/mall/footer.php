<?php
  $d = explode("/", trim($path, "/"));
  $srcUrl = '../source.php?dir=' . end($d) . '&amp;file=' . basename($_SERVER["PHP_SELF"]) . '#file';
?>
 
<footer id='footer'>
<footer><span class='sitefooter'>Copyright &copy; Mariana Torres Perez | <a href='http://validator.w3.org/unicorn/check?ucn_uri=referer&amp;ucn_task=conformance'>Unicorn</a> | <a href='../../redovisning.php'>Redovisning</a> | <a href='../../source.php'>Källkod </a> | <a href='www.github.se'>GitHub</a></span>

</footer>
<script src="../js/jquery-1.11.1.js"></script>
<script src="../lightboxplug/lightbox.js"></script>
<script src="../mall/mosex.js"></script>
<script src="main.js"></script>
</body>
</html>

