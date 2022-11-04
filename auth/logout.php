<?php
session_start();
include('../includes/routes.php');
if (isset($_COOKIE['UserId'])) {
    setcookie("UserId", '', time() - 3600, "/");
    header("Location:" . homepath());
    exit();
} else {
    header("Location:" . homepath() . 'admin/index.php');
}
