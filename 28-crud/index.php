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
          <th>Actions</th>
        </tr>
      </thead>
      <tbody> 
        <?php while ($client = mysqli_fetch_assoc($result)): ?>
          <tr> 
            <td><?= htmlspecialchars($client['name']) ?></td>
            <td><?= htmlspecialchars($client['forename']) ?></td>
            <td><?= htmlspecialchars($client['email']) ?></td>
            <td><?= (int) $client['yearsOld'] ?></td>
            <td>
              <a href="edit.php?id=<?= (int) $client['id'] ?>" class="btn-floating orange">Edit</a>
              <a href="delete.php?id=<?= (int) $client['id'] ?>" class="btn-floating red" onclick="return confirm('Are you sure?');">Delete</a>
            </td>
          </tr>
        <?php endwhile; ?>
      </tbody>
    </table>
    
    <br>
    <a href="add.php" class="btn">Add Client</a>
  </div>
</div>

<?php require_once './includes/footer.php'; ?>
