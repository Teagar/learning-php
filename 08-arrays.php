<?php
// Arrays numericos
echo "<pre>";
$cars = [1=>"BMW", 2=>"Veloster", 3=>"Hilux"];
$cars[] = "Amarok";
$cars[8] = "Ford";
$cars[0] = "Chevrolet";
print_r($cars);
echo $cars[1];


echo "<hr>";
// count
echo count($cars);

echo "<hr>";
// foreach

foreach ($cars as $key => $value) {
	echo $value."<br>";
}

echo "<hr>";

// Arrays assoc

$person = [
  "name"=>"Thiago",
  "year"=>19,
  "height"=>1.86
];
$person["city"] = "FSA";

var_dump($person);
foreach ($person as $key => $value) {
  echo $key.": ".$value."<br>";
}

echo "<hr>";
// Array multidimensional
$teams = [
  "cariocas"=> ["Vasco", "Flamengo", "Botafogo"],
  "paulistas"=> ["Santos", "Sao Paulo", "Palmeiras"],
  "baianos"=> ["Bahia", "Vitoria", "Itabuna"]
];

foreach ($teams as $key => $array) {
  echo "times $key: ";
  foreach ($array as $team){
  echo "$team ";
  }
  echo "<br>";
}

echo $teams["cariocas"][0];
