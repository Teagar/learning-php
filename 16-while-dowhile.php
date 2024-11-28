<?php
$counter = 1;
while ($counter <= 10) {
  echo "Counter = $counter<br>";
  $counter++;
}

echo "<hr>";

// do one time
do {
  echo "Counter = $counter<br>";
  $counter++;
} while ($counter <= 2);
