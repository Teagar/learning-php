<html>
<head> 
</head>
<body> 

<?php
$name = $_POST['name'];
$email = $_POST['email'];

if (isset($_POST['send-form'])) {
  echo $_POST['name']."<br>".$_POST['email'];
  echo "<hr>";
  echo "<pre>";
  var_dump($_POST);
  echo "</pre>";
}

?>

<form action="<?php $_SERVER['PHP_SELF']; ?>"method="post"> 
    <label for="name">NAME:</label>
    <input type="text" name="name" id="name"><br>
    <label for="email">EMAIL:</label>
    <input type="email" name="email" id="email"><br>
    <button type="submit" name="send-form">Send</button>
  </form>
</body>
</html>
