<?php
include_once 'php_action/conn.php';
include_once './includes/header.php';

if (isset($_GET['id'])) {
  $id = mysqli_escape_string($conn, $_GET['id']);

  $sql = "SELECT * FROM clients WHERE id = '$id'";
  $result = mysqli_query($conn, $sql);
  $data = mysqli_fetch_array($result);
}
?>

<div class="row"> 
  <div class="col s12 m6 push-m3"> 
    <h3 class="light"> Edit Client </h3>
    <form action="php_action/update.php" method="POST"> 
    <input type="hidden" name="id" value="<?= $data['id']?>">
      <div class="input-field col s12"> 
      <input type="text" name="name" id="name" value="<?=$data['name']?>">
	<label for="name">Name</label>
      </div>
      <div class="input-field col s12"> 
	<input type="text" name="forename" id="forename" value="<?=$data['forename']?>">
	<label for="forename">Forename</label>
      </div>
      <div class="input-field col s12"> 
	<input type="text" name="email" id="email" value="<?=$data['email']?>">
	<label for="email">email</label>
      </div>
      <div class="input-field col s12"> 
	<input type="text" name="yearsOld" id="yearsOld" value="<?=$data['yearsOld']?>">
	<label for="yearsOld">Years Old</label>
      </div>
      <button type="submit" name="btn-edit" class="btn">Update</button>
      <a href="index.php" type="submit" class="btn green">Client List</a>
    </form>
  </div>
</div>

<?php
include_once './includes/footer.php';
?>
