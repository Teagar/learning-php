<?php
session_start();
require_once 'conn.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['btn-delete'])) {
    $id = (int) $_POST['id'];

    $sql = "DELETE FROM clients WHERE id = ?";
    $stmt = mysqli_prepare($conn, $sql);
    
    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "i", $id); // i = int 
        
        if (mysqli_stmt_execute($stmt)) {
            $_SESSION['message'] = 'Deleted successfully!';
            header('Location: ../index.php?success');
        } else {
            $_SESSION['message'] = 'Error in delete!';
            header('Location: ../index.php?error');
        }
        mysqli_stmt_close($stmt);
    } else {
        $_SESSION['message'] = 'Database error!';
        header('Location: ../index.php?error');
    }
} else {
    $_SESSION['message'] = 'Invalid request!';
    header('Location: ../index.php?error');
}
exit;
