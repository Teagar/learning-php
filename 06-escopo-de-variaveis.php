<?php
// global scope
$name = "Thiago Cerqueira";

function showName() {
  // local scope
  global $name; // calling the variable $name for global scope
  echo $name;
}

showName();
echo "<hr>";
