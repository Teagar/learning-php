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

echo "<hr>";

// Secure method

$securePassword = password_hash($password, PASSWORD_DEFAULT);
echo $securePassword;

$password_db = '$2y$10$VzY6OekWkVZfED.dh726JuFCHceFXNfiJheyKvh/oOLudR9C0fo4u';

if(password_verify($password, $password_db)) {
  echo "<br>Valid";
}
