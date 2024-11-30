<?php
session_start();

$_SESSION['name'] = filter_input(INPUT_GET, 'name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$_SESSION['class'] = filter_input(INPUT_GET, 'class', FILTER_SANITIZE_NUMBER_INT);
$_SESSION['nA'] = filter_input(INPUT_GET, 'nA', FILTER_SANITIZE_NUMBER_FLOAT);
$_SESSION['nB'] = filter_input(INPUT_GET, 'nB', FILTER_SANITIZE_NUMBER_FLOAT);
$_SESSION['nC'] = filter_input(INPUT_GET, 'nC', FILTER_SANITIZE_NUMBER_FLOAT);
$_SESSION['nD'] = filter_input(INPUT_GET, 'nD', FILTER_SANITIZE_NUMBER_FLOAT);
$_SESSION['media'] = filter_input(INPUT_GET, 'media', FILTER_SANITIZE_NUMBER_FLOAT);
