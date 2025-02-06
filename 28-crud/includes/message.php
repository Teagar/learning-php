<?php
session_start();

if (!empty($_SESSION['message'])): ?>
    <script>
        window.onload = function() {
	  // addslashes automaticaly
            alert("<?= addslashes($_SESSION['message']); ?>");
        };
    </script>
<?php 
    unset($_SESSION['message']); // Remove just the message session
endif; 
?>
