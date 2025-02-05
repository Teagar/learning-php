<?php
include_once './includes/header.php';
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
	<tr> 
	  <td>Thiago</td>
	  <td>Cerqueira</td>
	  <td>thiago@gmail.com</td>
	  <td>29</td>
	  <td><a href="" class="btn-floating orange">Edit</a></td>
	  <td><a href="" class="btn-floating red">Delete</a></td>
	</tr>
      </tbody>
    </table>
    </br>
    <a href="add.php" class="btn">Add client</a>
  </div>
</div>

<?php
include_once './includes/footer.php';
?>
