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

        $otp = rand(1000, 9999);
        // Authorisation details
        $_SESSION['otp'] = $otp;
        // $_SESSION['time'] = time();
        // echo $_SESSION['time'];


        $_SESSION['time'] = time();
        $_SESSION['username'] = $name;

        // echo $_SESSION['time'];

        $success = "Number verified";
        header('location:otp.php?success=' . $success);
    } else {
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
