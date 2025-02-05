<?php

require_once 'conn.php';

if (isset($_POST['btn-register'])) {
  $name = mysqli_escape_string($conn, $_POST['name']);
  $forename = mysqli_escape_string($conn, $_POST['forename']);
  $email = mysqli_escape_string($conn, $_POST['email']);
  $yearsOld = mysqli_escape_string($conn, $_POST['yearsOld']);

  $sql = "INSERT INTO clients (`name`, forename, email, yearsOld) VALUES ('$name', '$forename', '$email', '$yearsOld')";
  if(mysqli_query($conn, $sql)) {
    header('Location: ../index.php?success');
  } else {
    header('Location: ../index.php?error');
  }
}
