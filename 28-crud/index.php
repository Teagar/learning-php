<?php
include_once 'php_action/conn.php';

include_once './includes/header.php';

include_once './includes/message.php';
?>


<div class="row"> 
  <div class="col s12 m6 push-m3 red"> 
    <h3 class="light"> Clients </h3>
    <table class="striped"> 
      <thead> 
	<tr> 
	  <th>Name:</th>
	  <th>Forename:</th>
	  <th>Email:</th>
	  <th>Years Old:</th>
	</tr>
      </thead>

      <tbody> 
	<?php
	$sql = "SELECT * FROM clients";
$result = mysqli_query($conn, $sql);

	while($data = mysqli_fetch_array($result)) {


	?>
	<tr> 
	  <td><?=$data['name']?></td>
	  <td><?=$data['forename']?></td>
	  <td><?=$data['email']?></td>
	  <td><?=$data['yearsOld']?></td>
	  <td><a href="" class="btn-floating orange">Edit</a></td>
	  <td><a href="" class="btn-floating red">Delete</a></td>
	</tr>
	<?php } ?>
      </tbody>
    </table>
    </br>
    <a href="add.php" class="btn">Add client</a>
  </div>
</div>

<?php
include_once './includes/footer.php';
?>
