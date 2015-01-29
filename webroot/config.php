<?php
/**
 * Config for Morrígan. Change settings here to affect installation.
 *
 *
 */
 
/**
 * Set the error reporting.
 *
 */
error_reporting(-1);              // Report all type of errors
ini_set('display_errors', 1);     // Display all errors 
ini_set('output_buffering', 0);   // Do not buffer outputs, write directly
 

/**
 * Creates Morrígan variable.
 *
 */
$morrigan = array(); 
 
 
/**
 * Defines Morrígan paths.
 *
 */
define('MORRIGAN_INSTALL_PATH', __DIR__ . '/..');
define('MORRIGAN_THEME_PATH', MORRIGAN_INSTALL_PATH . '/theme/render.php');
 
 
/**
 * Include bootstrapping functions.
 *
 */
include(MORRIGAN_INSTALL_PATH . '/src/bootstrap.php');
 
 
/**
 * Settings for JavaScript.
 *
 */
$morrigan['modernizr'] = 'js/modernizr.js';

$morrigan['jquery'] = '//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js';
//$morrigan['jquery'] = null; // To disable jQuery

$morrigan['javascript_include'] = array();
//$morrigan['javascript_include'] = array('js/jquery.slides.min.js'); // To add extra javascript files
 
 
/**
 * Start the session.
 *
 */
session_name(preg_replace('/[^a-z\d]/i', '', __DIR__));
session_start();


/**
 * Google analytics.
 *
 */
$morrigan['google_analytics'] = 'UA-22093351-1'; // Set to null to disable google analytics


/**
 *Header and footer
 *
 */
$morrigan['logo'] = <<<EOD
<img class='sitelogo' src='img/logo.png' alt='mtp logo' width='70' height='70'/>
EOD;

$morrigan['footer'] = <<<EOD
<footer><span class='sitefooter'>Copyright &copy; Mariana Torres Perez | <a href='http://validator.w3.org/unicorn/check?ucn_uri=referer&amp;ucn_task=conformance'>Unicorn</a> | <a href='redovisning.php'>Redovisning</a> | <a href='source.php'>Källkod </a> | <a href='www.github.se'>GitHub</a></span>
EOD;

 
/**
 * The navbar
 *
 */
//$morrigan['navbar'] = null; // To skip the navbar
$morrigan['navbar'] = array(
  'class' => 'navbar',
  'items' => array(
    'hem'         => array('text'=>'Hem',             'url'=>'home.php',              'title' => 'Presentation'),
    'presentation' => array('text'=>'Presentation',     'url'=>'presentation/jquery/plugins.php',     'title' => 'Presentation av våra erbjudanden'),
    'om' => array('text'=>'Om',     'url'=>'about.php',     'title' => 'About'),
    'installation' => array('text'=>'Installation',     'url'=>'installation.php',     'title' => 'Installera våra plugin'),
  ),
  'callback_selected' => function($url) {
    if(basename($_SERVER['SCRIPT_FILENAME']) == $url) {
      return true;
    }
  }
);


/**
 * Theme related settings.
 *
 */
//$morrigan['stylesheet'] = 'css/style.css'; //if there is just one stylesheet
$morrigan['stylesheets'] = array('css/style.css','css/form.css');
$morrigan['favicon'] = 'img/favicon.ico';
 
 
/**
 * Site wide settings.
 *
 */
$morrigan['lang']         = 'sv';
$morrigan['title_append'] = ' | Morrígan Group';

/**
 * Settings for the database.
 *
 */
$morrigan['database']['dsn']            = 'mysql:host=blu-ray.student.bth.se;dbname=matl14;';
$morrigan['database']['username']       = 'matl14'; //root when local
$morrigan['database']['password']       = '1F_n%Bq7'; //should be empty when local
$morrigan['database']['driver_options'] = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'UTF8'");

?> 