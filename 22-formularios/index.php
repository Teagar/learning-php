<html>
<body>

<?php
/* Validations Filters
 * Functions (filter_input - filter_var)
 * filter_input(INPUT_METHOD, $name, FILTER_VALIDATE_TYPE)
 * FILTER_VALIDATE_INT
 * FILTER_VALIDATE_EMAIL
 * FILTER_VALIDATE_FLOAT
 * FILTER_VALIDATE_IP
 * FILTER_VALIDATE_URL
 */
/*
  // Validations
  if(!$yearsOld = filter_input(INPUT_POST, 'yearsOld', FILTER_VALIDATE_INT)) {
    $errors[] = "Age needs to be a int";
  }
  if(!$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)) {
    $errors[] = "Invalid email";
  }
  if(!$weight = filter_input(INPUT_POST, 'weight', FILTER_VALIDATE_FLOAT)) {
    $errors[] = "Weight needs to be an float";
  }
  if(!$ip = filter_input(INPUT_POST, 'ip', FILTER_VALIDATE_IP)) {
    $errors[] = "Invalid IP";
  }
  if(!$url = filter_input(INPUT_POST, 'url', FILTER_VALIDATE_URL)) {
    $errors[] = "Invalid URL";
  }
 * */


/* Sanitize Filters
 * Functions (filter_input - filter_var)
 * filter_input(INPUT_METHOD, $name, FILTER_VALIDATE_TYPE)
 * FILTER_SANITIZE_SPECIAL_CHARS
 * FILTER_SANITIZE_NUMBER_INT
 * FILTER_SANITIZE_EMAIL
 * FILTER_SANITIZE_URL
 */
?>

<?php
// Verify if the button has clicked
$sendFormExists = isset($_POST['send-form']);
if ($sendFormExists) {
  // Error array
  $errors = [];

  // Sanitize
  $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
  echo $name."<br>";

  $age = filter_input(INPUT_POST, 'age', FILTER_SANITIZE_NUMBER_INT);
  if(!filter_var($age, FILTER_VALIDATE_INT)) {
    $errors[] = "Age need to be an int";
  }
  echo $age."<br>";

  $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
  if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = "Ivalid email";
  }
  echo $email."<br>";

  $url = filter_input(INPUT_POST, 'url', FILTER_SANITIZE_URL);
  if(!filter_var($url, FILTER_VALIDATE_URL)) {
    $errors[] = "Ivalid URL";
  }
  echo $url."<br>";

  // Showing messages
  if(!empty($errors)) {
    foreach ($errors as $error){
      echo "<li>$error</li>";
    }
  } else {
    echo "All is been okay";
  }
}
?>

<form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
Name: <input type="text" name="name"><br>
Age: <input type="text" name="age"><br>
Email: <input type="email" name="email"><br>
URL: <input type="text" name="url"><br>
<button type="submit" name="send-form"> Send </button>
</form>

</body>
</html>
