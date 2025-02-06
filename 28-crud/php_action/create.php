<?php
session_start();
require_once 'conn.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['btn-register'])) {
    $name = mysqli_real_escape_string($conn, trim($_POST['name']));
    $forename = mysqli_real_escape_string($conn, trim($_POST['forename']));
    $email = mysqli_real_escape_string($conn, trim($_POST['email']));
    $yearsOld = (int) $_POST['yearsOld'];

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['message'] = 'Invalid email format!';
        header('Location: ../index.php?error');
        exit;
    }

    $sql = "INSERT INTO clients (name, forename, email, yearsOld) VALUES (?, ?, ?, ?)"; // name, forename, email, yearsOld
    $stmt = mysqli_prepare($conn, $sql);
    
    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "sssi", $name, $forename, $email, $yearsOld); // sssi = string, string, string, int
        
        if (mysqli_stmt_execute($stmt)) {
            $_SESSION['message'] = 'Registered successfully!';
            header('Location: ../index.php?success');
        } else {
            $_SESSION['message'] = 'Error in registration!';
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
