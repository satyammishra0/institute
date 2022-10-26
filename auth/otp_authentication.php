<?php
session_start();


// OTP
if (isset($_SESSION['otp'])) {
    $otp = $_POST['otp'];
    if ($_SESSION['otp'] == $otp) {
        echo "otp match successful";
        echo "<br>";
        $country = date_default_timezone_get();
        echo $country . "<br>";
        date_default_timezone_set('Asia/Kolkata');
        $time = date('G:i:s');
        echo $time;
        // header("Location:?success=" . $success . "&error=" . $error);
    } else {
        $error = "OTP match unsuccessful";
        $success = "Number verified";
        header("Location:otp.php?success=" . $success . "&error=" . $error);
    }
}
