<html>
<body>

<?php
if (isset($_POST['send-form'])) {
  $errors = [];
  $yearsOld = $_POST['yearsOld'];
  if($yearsOld = filter_input(INPUT_POST, 'yearsOld', FILTER_VALIDATE_INT)) {
    echo "Int";
  }
}
?>

<form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
Nome: <input type="text" name="name"><br>
Email: <input type="email" name="email"><br>
Years: <input type="number" name="yearsOld">
<button type="submit" name="send-form"> Send </button>
</form>

</body>
</html>
