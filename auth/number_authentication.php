<?php
session_start();

// ---------------------------
// Checking Sumbit button press
if (isset($_POST['submit_btn'])) {

    $num = $_POST['contact_number'];
    $name = $_POST['username'];

    // ---------------------------
    // Checking contact number 

    if (strlen($num) == 10 && preg_match('^[789]\d{9}$^', $num) && strlen($name)) {
        session_start();

        // Generating Random Otp
        $otp = rand(1000, 9999);
        $_SESSION['otp'] = $otp;

        // Storing current time on session
        $_SESSION['time'] = time();

        // Storing current time on session
        $_SESSION['contactNumber'] = $num;

        // Storing username on session
        $_SESSION['username'] = $name;
        $success = "Number verified";

        // Redirection to the next OTP page
        header('location:otp.php?success=' . $success);
    } else {

        // If the number validation failed
        $error = 'Please enter a 10 digit valid number and name';
        header("Location:contact_number.php?error=" . $error);
        echo $error;
    }
}

// ---------------------------
// Giving Error message for not pressing button
else {
    $error = 'Access Denied';
    header("Location:contact_number.php?error=" . $error);
}
