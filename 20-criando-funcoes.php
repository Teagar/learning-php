<?php

function showName($name) {
  echo "My name is $name";
}

showName("Thiago");

echo "<hr>";

function calcMedia($name, $n1, $n2, $n3, $n4) {
  $media = ($n1 + $n2 + $n3 + $n4) / 4;
  echo ($media >= 7) ? "$name congrat" : "$name bruhh";
}

calcMedia("Thiago", 8, 5, 9, 10);
