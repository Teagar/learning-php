<?php
session_start();
require_once 'conn.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['btn-edit'])) {
    $name = mysqli_real_escape_string($conn, trim($_POST['name']));
    $forename = mysqli_real_escape_string($conn, trim($_POST['forename']));
    $email = mysqli_real_escape_string($conn, trim($_POST['email']));
    $yearsOld = (int) $_POST['yearsOld'];
    $id = (int) $_POST['id'];

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['message'] = 'Invalid email format!';
        header('Location: ../index.php?error');
        exit;
    }

    $sql = "UPDATE clients SET name = ?, forename = ?, email = ?, yearsOld = ? WHERE id = ?";
    $stmt = mysqli_prepare($conn, $sql);
    
    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "sssii", $name, $forename, $email, $yearsOld, $id); // sssii = string, string, string, int, int
        
        if (mysqli_stmt_execute($stmt)) {
            $_SESSION['message'] = 'Updated successfully!';
            header('Location: ../index.php?success');
        } else {
            $_SESSION['message'] = 'Error in update!';
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
