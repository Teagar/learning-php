<?php
$hostname = "localhost";
$username = "root";
$password = "2005";
$database = "crud";

$conn = mysqli_connect($hostname, $username, $password, $database);
mysqli_set_charset($conn, "utf8");

if(mysqli_connect_error()) {
  echo "Error". mysqli_connect_error();
}
