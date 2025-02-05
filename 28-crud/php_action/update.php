<?php
session_start();

require_once 'conn.php';

if (isset($_POST['btn-edit'])) {
  $name = mysqli_escape_string($conn, $_POST['name']);
  $forename = mysqli_escape_string($conn, $_POST['forename']);
  $email = mysqli_escape_string($conn, $_POST['email']);
  $yearsOld = mysqli_escape_string($conn, $_POST['yearsOld']);

  $id = mysqli_escape_string($conn, $_POST['id']);

  $sql = "UPDATE clients set `name` = '$name', forename = '$forename', email = '$email', yearsOld = '$yearsOld' WHERE id = '$id'";
  if(mysqli_query($conn, $sql)) {
    $_SESSION['message'] = 'Updated with success!';
    header('Location: ../index.php?success');
  } else {
    $_SESSION['message'] = 'Error in update!';
    header('Location: ../index.php?error');
  }
}
