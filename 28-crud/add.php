<?php
include_once './includes/header.php';
?>

<div class="row"> 
  <div class="col s12 m6 push-m3 red"> 
    <h3 class="light"> New Client </h3>
    <form action="php_action/create.php" method="POST"> 
      <div class="input-field col s12"> 
	<input type="text" name="name" id="name">
	<label for="name">Name</label>
      </div>
      <div class="input-field col s12"> 
	<input type="text" name="forename" id="forename">
	<label for="forename">Forename</label>
      </div>
      <div class="input-field col s12"> 
	<input type="text" name="email" id="email">
	<label for="email">email</label>
      </div>
      <div class="input-field col s12"> 
	<input type="text" name="yearsOld" id="yearsOld">
	<label for="yearsOld">Years Old</label>
      </div>
      <button type="submit" name="btn-register" class="btn">Register</button>
      <a href="index.php" type="submit" class="btn green">Client List</a>
    </form>
  </div>
</div>

<?php
include_once './includes/footer.php';
?>
