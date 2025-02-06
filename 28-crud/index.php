<?php
require_once 'php_action/conn.php';
require_once './includes/header.php';
require_once './includes/message.php';

// Query for search clients
$query = "SELECT * FROM clients";
$result = mysqli_query($conn, $query);
?>

<div class="row"> 
  <div class="col s12 m6 push-m3"> 
    <h3 class="light">Clients</h3>
    
    <table class="striped"> 
      <thead> 
        <tr> 
          <th>Name</th>
          <th>Forename</th>
          <th>Email</th>
          <th>Years Old</th>
        </tr>
      </thead>
      <tbody> 
	<?php if (mysqli_num_rows($result) > 0): ?>
        <?php while ($client = mysqli_fetch_assoc($result)): ?>
          <tr> 
            <td><?= htmlspecialchars($client['name']) ?></td>
            <td><?= htmlspecialchars($client['forename']) ?></td>
            <td><?= htmlspecialchars($client['email']) ?></td>
            <td><?= (int) $client['yearsOld'] ?></td>
            <td>
	      <a href="edit.php?id=<?= (int) $client['id'] ?>" class="btn-floating orange"><i class="material-icons">edit</i></a>
	    </td>
	    <td>
	      <form action="php_action/delete.php" method="POST" style="display:inline;">
		  <input type="hidden" name="id" value="<?= (int) $client['id'] ?>">
		  <button type="submit" name="btn-delete" class="btn-floating red" onclick="return confirm('Are you sure?');">
		      <i class="material-icons">delete</i>
		  </button>
	      </form>
            </td>
          </tr>
	  <?php 
	  endwhile;
	  else: ?>
	  <tr> 
	    <td>-</td>
	    <td>-</td>
	    <td>-</td>
	    <td>-</td>
	  </tr>
	
	  <?php endif; ?>
      </tbody>
    </table>
    
    <br>
    <a href="add.php" class="btn">Add Client</a>
  </div>
</div>

<?php require_once './includes/footer.php'; ?>
