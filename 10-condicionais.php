<?php
/*
 * if
 * elseif
 * else
 */
$number= 10;

if ($number == 10) {
  echo "Is equals ten";
} elseif ($number <= 9) {
  echo "Is above ten";
} else {
  echo "Nah";
}

$media = 7;

echo "<hr>";

echo ($media >= 7) ? "Congrat" : "Bruh";

/*
 * switch case
 */

echo "<hr>";
$color = "blue";

switch ($color) {
  case "red":
    echo $color;
    break;
  case "yellow":
    echo $color;
    break;
  case "blue":
    echo $color;
    break;
  default:
    echo "bruh";
}
