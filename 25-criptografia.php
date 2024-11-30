<?php

$password = "Deus1245";

$new64 = base64_encode($password)."<br>";
$newMD5 = md5($password);
$newSHA1 = sha1($password);

echo $new64;
echo base64_decode($new64);
echo "<hr>";
echo $newMD5;
echo "<hr>";
echo $newSHA1;



