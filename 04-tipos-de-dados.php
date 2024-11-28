<?php
/**************** ******************/
echo "<pre>";
// string 
$name = "Hello, World!";
var_dump($name);

if (is_string($name)) {
  echo "Is a string";
} else {
  echo "isn't a string";
}
echo "<hr>";

// int 
$yearsOld = 19;
var_dump($yearsOld);

if (is_int($yearsOld)) {
  echo "Is a int";
} else {
  echo "Isn't a string";
}
echo "<hr>";

// float

$height = 1.86;
var_dump($height);
if (is_float($height)) {
  echo "Is a float";
} else {
  echo "Isn't a float";
}
echo "<hr>";

// boolean

$admin = true;
var_dump($admin);
if (is_bool($admin)) {
  echo "Is a boolean";
} else {
  echo "Isn't a boolean";
}
echo "<hr>";


/*************** Compost **************/
// array
//$cars = array("Gol", "Uno", "Camaro");
$cars = ["gol", "uno", "camaro"];
var_dump($cars);
if (is_array($cars)) {
  echo "Is an array";
} else {
  echo "Isn't an array";
}
echo "<hr>";

// object

class Client {
  public $name;
  public function setName($name) {
    $this->$name = $name;
  }
}

$client = new Client();
$client->setName("Luck");
var_dump($client);
if (is_object($client)) {
  echo "Is an object";
} else {
  echo "Isn't an object";
}
echo "<hr>";


/********** Special ***********/
// null
$city = NULL;
var_dump($city);
