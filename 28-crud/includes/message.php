<?php
session_start();
if(isset($_SESSION['message'])) { ?>
<script>
  window.onload = function() {
    alert(<?= $_SESSION['message'];?>)
  }
</script>

<?php
}

session_unset();
?>
