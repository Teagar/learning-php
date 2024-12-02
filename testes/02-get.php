<html>
<head> 
</head>
<body> 

<?php
$name = $_GET['name'];
$email = $_GET['email'];

if (isset($_GET['send-form'])) {
  echo $name."<br>".$email;
  echo "<hr>";
  echo "<pre>";
  var_dump($_GET);
  echo "</pre>";
}

echo $name;

?>

<form action="<?php $_SERVER['PHP_SELF']; ?>"method="get"> 
    <label for="name">NAME:</label>
    <input type="text" name="name" id="name"><br>
    <label for="email">EMAIL:</label>
    <input type="email" name="email" id="email"><br>
    <button type="submit" name="send-form">Send</button>
    <a href="dados.php?name=Thiago"> SEND </a>
  </form>
</body>
</html>
