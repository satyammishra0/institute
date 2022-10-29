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
        $setTime = $_SESSION['time'];
        $newTime = time();
        $netTime = $newTime - $setTime;
        echo $netTime;
        if ($netTime > 30) {
            $error = "OTP Timeout ! Please try again ";
            header("Location:contact_number.php?&error=" . $error);
        } else {
            // header("Location:?success=" . $success . "&error=" . $error);
        }
    } else {
        $error = "OTP match unsuccessful";
        $success = "Number verified";
        header("Location:otp.php?success=" . $success . "&error=" . $error);
    }
}


// INSERT INTO `userdetails` (`id`, `name`, `contactno`, `otp`) VALUES ('1', '1satyam', '9005946009', '1234');