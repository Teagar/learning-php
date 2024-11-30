<?php
// initialize session
session_start();
$_SESSION['color'] = "green";
$_SESSION['car'] = "Fiesta";

echo $_SESSION['color']."<br>".$_SESSION['car'].session_id();
