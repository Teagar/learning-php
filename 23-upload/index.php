<html>
<body>
<?php
// Verification

$isFormSend = isset($_POST['sendform']);

  if ($isFormSend) {
    $allowFormats = ["png", "jpeg", "jpg", "gif"];
    $filesCount = count($_FILES['archive']['name']);

    // Verification of extension
    for ($file = 0; $file < $filesCount; $file++) {
      $extension = pathinfo($_FILES['archive']['name'][$file], PATHINFO_EXTENSION);
      if (in_array($extension, $allowFormats)) {
	$folder = "arquivos/";
	$temp = $_FILES['archive']['tmp_name'][$file];
	$newName = uniqid().".$extension";
	$newFile = $folder.$newName;

	$archiveHasMoved = move_uploaded_file($temp, $newFile);

	if($archiveHasMoved) {
	  echo "The file is uploaded:$newFile<br>";
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
