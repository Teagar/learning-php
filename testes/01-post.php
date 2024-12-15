<html>
<head> 
</head>
<body> 

<?php
// Define variables names
$name = $_POST['name'];
$email = $_POST['email'];
$isFormSend = isset($_POST['send-form']);

// Verify if the form has send
if ($isFormSend) {
  echo $name."<br>".$email;
  echo "<hr>";
  echo "<pre>";
  var_dump($_POST);
  echo "</pre>";
}

?>

<!-- Simple login form --!>
<!-- form action="<?php $_SERVER['PHP_SELF']; ?>"method="post" --!> 
<form action="dados.php"method="post"> 
    <label for="name">NAME:</label>
    <input type="text" name="name" id="name"><br>
    <label for="email">EMAIL:</label>
    <input type="email" name="email" id="email"><br>
    <button type="submit" name="send-form">Send</button>
  </form>
</body>
</html>
