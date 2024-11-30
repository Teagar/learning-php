<html>
<body>
<?php
  // Verification
  if (isset($_POST['sendform'])) {
    $allowFormats = ["png", "jpeg", "jpg", "gif"];
    $filesCount = count($_FILES['archive']['name']);

    // Verification of extension
    for ($i = 0; $i < $filesCount; $i++) {
      $extension = pathinfo($_FILES['archive']['name'][$i], PATHINFO_EXTENSION);
      if (in_array($extension, $allowFormats)) {
	$folder = "arquivos/";
	$temp = $_FILES['archive']['tmp_name'][$i];
	$newName = uniqid().".$extension";

	if(move_uploaded_file($temp, $folder.$newName)) {
	  echo "The file is uploaded:$folder$newName<br>";
	} else {
	  echo "Cant make upload to $temp<br>";
	}
      } else {
	echo "invalid Format: $extension<br>";
      }

      }
    }
?>
  
  <!-- Form -->
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
    <input type="file" name="archive[]" required multiple><br>
    <input type="submit" name="sendform" value="Send">
  </form>
</body>
</html>
