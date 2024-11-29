<html>
<body>

<?php
/* Validations
 * Functions (filter_input - filter_var)
 * filter_input(INPUT_METHOD, $name, FILTER_VALIDATE_TYPE)
 * FILTER_VALIDATE_INT
 * FILTER_VALIDATE_EMAIL
 * FILTER_VALIDATE_FLOAT
 * FILTER_VALIDATE_IP
 * FILTER_VALIDATE_URL
 */
?>

<?php
// Verify if the button has clicked
$sendFormExists = isset($_POST['send-form']);
if ($sendFormExists) {
  // Error array
  $errors = [];

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
Age: <input type="text" name="yearsOld"><br>
Email: <input type="email" name="email"><br>
Weight: <input type="text" name="weight"><br>
IP: <input type="text" name="ip"><br>
URL: <input type="text" name="url"><br>
<button type="submit" name="send-form"> Send </button>
</form>

</body>
</html>
