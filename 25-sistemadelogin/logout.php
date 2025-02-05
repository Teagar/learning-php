<?php

// Verification
if (!isset($_SESSION['logged'])) {
  header('Location: index.php');
}

session_start();
session_unset();
session_destroy();
header('Location: index.php');
