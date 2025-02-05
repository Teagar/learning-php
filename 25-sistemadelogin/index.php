<?php
// Connection
require_once 'conn.php';

// Session
session_start();


$currentPage = $_SERVER['PHP_SELF'];
$isLoginFormSend = isset($_POST['btn-enter']);

if ($isLoginFormSend) {
  $errors = "";
  $login = mysqli_real_escape_string($conn, $_POST['login']);
  $password = mysqli_real_escape_string($conn, $_POST['password']);

  if (empty($login) || empty($password)) {
    $errors .= "<li> Login/password fold have to be filled </li>";
  } else {
    $sql = "SELECT login FROM users WHERE login = '$login'";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0) {
      $password = md5($password);
      $sql = "SELECT * FROM users WHERE login = '$login' AND password = '$password'";
      $result = mysqli_query($conn, $sql);

      if (mysqli_num_rows($result) === 1) {
	$datas = mysqli_fetch_array($result);
	mysqli_close($conn);
	$_SESSION['logged'] = true;
	$_SESSION['user_id'] = $datas['id'];
	header('Location: home.php');
      } else {
	$errors .= "<li> The password and login is incorrect </li>";
      }

    } else {
      $errors .= "<li> Inexistent user </li>";
    }
  }
  if (!empty($errors)) {
    echo $errors;
  }
}
?><!DOCTYPE html>
<head>
  <title>Login</title>
  <meta charset="utf-8">
</head>
<body> 
  <h1> Login </h1>
  <form action ="<?=$currentPage?>" method="POST"> 
    <label for="login"> Login: </label>
    <input type="text" id="login" name="login"/>

    <label for="password"> Password: </label>
    <input type="password" id="password" name="password"/>

    <button type="submit" name="btn-enter"> Enter </button>
  </form>

</body>
</html>
