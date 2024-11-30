<html>
<body>
<?php
  // Verification
  if (isset($_POST['sendform'])) {
    $allowFormats = ["png", "jpeg", "jpg", "gif"];
    $extension = pathinfo($_FILES['archive']['name'], PATHINFO_EXTENSION);

    // Verification of extension
    if (in_array($extension, $allowFormats)) {
      $folder = "arquivos/";
      $temp = $_FILES['archive']['tmp_name'];
      $newName = uniqid().".$extension";

      if(move_uploaded_file($temp, $folder.$newName)) {
	$message = "Uploaded";
      } else {
	$message= "Cant make a upload";
      }
    } else {
      $message = "invalid Format";
    }

    echo $message;
  }
?>
  
  <!-- Form -->
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
    <input type="file" name="archive" required><br>
    <input type="submit" name="sendform" value="Send">
  </form>
</body>
</html>
