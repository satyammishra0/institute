
<?php

// Includng config /DB detail page
require_once "../configuration.php";


// Fetching the email/password from DB
$getAdminDetailsQuery = 'SELECT * FROM `admin_login_details` WHERE id =1;';
$getAdminDetailsQueryrun = mysqli_query($conn, $getAdminDetailsQuery);
$fetchAdminDetails = mysqli_fetch_assoc($getAdminDetailsQueryrun);
$adminEmail = $fetchAdminDetails['email'];
$adminPassword = $fetchAdminDetails['password'];


// Getting the user entered data 
$enterdMail = strtolower($_POST['admin_email']);
$enteredPassword = $_POST['admin_password'];


// if details are correct directing to DB
if ($enterdMail == $adminEmail && $enteredPassword == $adminPassword) {

    // Storing success message on session
    $success_message = 'You are the admin boss 👑';
    $_SESSION['success'] = $success_message;

    header('Location:./index.php?&success_message=' . $success_message);
}


// Pushing back to login page with error
else {

    $error = "You are not the Admin (🙂) ! Please recheck the details";
    // header('Location:./admin_login.php?&error=' . $error);
}

?>