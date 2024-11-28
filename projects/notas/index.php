<?php

$media = 6;
$isHorrible = 1;
$isBad = 4;
$isGood = 6;
$isExcellent = 8;


$notes = [5.6, 7.8, 9.8, 5.0];
$situations = [];
$finalMedia = array_sum($notes) / count($notes);
$finalSituation = "Bad";
$percentage = ($finalMedia*10)."%";


foreach ($notes as $key => $note) {

  if ($note >= $isExcellent){
    $situations[$key] = "Excellent";
  } else if ($note >= $isGood) {
    $situations[$key] = "Good";
  } else if ($note >= $isBad) {
    $situations[$key] = "Bad";
  } else if ($note >= $isHorrible) {
    $situations[$key] = "Horrible";
  }
}

  if ($finalMedia >= $isExcellent){
    $finalSituation = "Excellent";
  } else if ($finalMedia >= $isGood) {
    $finalSituation = "Good";
  } else if ($finalMedia >= $isBad) {
    $finalSituation = "Bad";
  } else if ($finalMedia >= $isHorrible) {
    $finalSituation = "Horrible";
  }


?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Notes</title>
  <link href="css/style.css" rel="stylesheet">
</head>
<body>
  <table border=1> 
    <tr> 
      <?php
	foreach ($notes as $key => $note) {
	  echo "<th>".++$key." bim</th><th>Sit ".$key." bim</th>";
	}
      ?>
    </tr>
    <tr>
      <?php
	foreach ($notes as $key => $note) {
	  echo "<td>$note</td><td>$situations[$key]</td>";
	}
      ?>
    </tr>
    <tr>
      <th>Required note</th>
      <td><?=$media?></td>
    </tr>
    <tr>
      <th>Final Media</th>
      <td><?=$finalMedia?></td>
    </tr>
    <tr>
      <th>Year Situation</th>
      <td><?=$finalSituation?></td>
    </tr>
    <tr>
      <th>Percentage</th>
      <td><?=$percentage?></td>
    </tr>
    <tr>
      <th>Final Message</th>
      <td><?="Congrats!! You pass the year in a $finalSituation nivel"?></td>
    </tr>
  </table>
</body>
</html>
