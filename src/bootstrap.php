<?php
/**
 * Bootstrapping functions, essential and needed for Morrígan to work together with some common helpers. 
 *
 */
 
/**
 * Default exception handler.
 *
 */
function myExceptionHandler($exception) {
  echo "Morrígan: Uncaught exception: <p>" . $exception->getMessage() . "</p><pre>" . $exception->getTraceAsString(), "</pre>";
}
set_exception_handler('myExceptionHandler');
 
 
/**
 * Autoloader for classes.
 *
 */
function myAutoloader($class) {
  $path = MORRIGAN_INSTALL_PATH . "/src/{$class}/{$class}.php";
  if(is_file($path)) {
    include($path);
  }
  else {
    throw new Exception("Classfile '{$class}' does not exists.");
  }
}
spl_autoload_register('myAutoloader');


/**
 * Function to print out an array. Good to have for debuging.
 *
 */
 
 function dump($array) {
  echo "<pre>" . htmlentities(print_r($array, 1)) . "</pre>";
}