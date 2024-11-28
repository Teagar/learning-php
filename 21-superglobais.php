<?php

/*
 * $GLOBALS
 * $_SERVER
 * $_REQUEST
 * $_POST
 * $_GET
 * $_FILES
 */

$x = 10;
$y = 5;

function sum() {
  echo $GLOBALS['x'] + $GLOBALS['y']."<hr>";
}

sum();
// server
echo "PHP_SELF: ".$_SERVER['PHP_SELF']."<br>";
echo "SERVER_NAME: ".$_SERVER['SERVER_NAME']."<br>";
echo "SCRIPT_FILENAME: ".$_SERVER['SCRIPT_FILENAME']."<br>";
echo "DOCUMENT_ROOT: ".$_SERVER['DOCUMENT_ROOT']."<br>";
echo "SERVER_PORT: ".$_SERVER['SERVER_PORT']."<br>";
echo "REMOTE_ADDR: ".$_SERVER['REMOTE_ADDR']."<br>";

echo "<hr>";
