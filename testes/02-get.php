<html>
<head> 
</head>
<body> 

<?php
// Define variables names
$name = $_GET['name'];
$email = $_GET['email'];
$isFormSend = isset($_GET['send-form']);

// Verify if form has submited
if ($isFormSend) {
  echo $name."<br>".$email;
  echo "<hr>";
  echo "<pre>";
  var_dump($_GET);
  echo "</pre>";
}

echo $name;

?>

<!-- Login Form --!>
<form action="<?php $_SERVER['PHP_SELF']; ?>"method="get"> 
    <label for="name">NAME:</label>
    <input type="text" name="name" id="name"><br>
    <label for="email">EMAIL:</label>
    <input type="email" name="email" id="email"><br>
    <button type="submit" name="send-form">Send</button>
    <a href="dados.php?name=Thiago"> PRE SEND </a>
  </form>
</body>
</html>
