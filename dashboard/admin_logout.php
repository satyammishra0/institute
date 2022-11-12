<?php
require_once "../configuration.php";

// Check weather user is not doing any wrong action

if (isset($_SESSION['success'])) {
    // This is the session unset property to LOGOUT
    unset($_SESSION['success']);
    $successMessage = "You have been logout successfully";
    // Redirection to dashboard  with success message
    header("Location:admin_login.php?successMessage=" . $successMessage);
} else {
    // If there are unfair means so redirection to dashboard with error message
    $error = "You are trying offensive things 🤨";
    header('location.index.php?error= ' . $error);
}
