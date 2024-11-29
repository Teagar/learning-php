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
  $errors = [];
  $yearsOld = $_POST['yearsOld'];
  if(!$yearsOld = filter_input(INPUT_POST, 'yearsOld', FILTER_VALIDATE_INT)) {
    $errors[] = "Age needs to be a int";
  }
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
Weigth: <input type="text" name="Weigth"><br>
IP: <input type="text" name="ip"><br>
URL: <input type="text" name="url"><br>
<button type="submit" name="send-form"> Send </button>
</form>

</body>
</html>
