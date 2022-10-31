<?php
session_start();


// OTP
if (isset($_SESSION['otp'])) {

    // Storing Inserted opt to a new variable
    $otp = $_POST['otp'];

    if ($_SESSION['otp'] == $otp) {

        // Validating time needs to be less than 30 sec
        $setTime = $_SESSION['time'];
        $newTime = time();
        $netTime = $newTime - $setTime;
        if ($netTime > 30) {
            // If time is greater than 30 sec than redirection
            $error = "OTP Timeout ! Please try again ";
            header("Location:contact_number.php?&error=" . $error);
        } else {

            // Creating names for each session data
            $username = $_SESSION['username'];
            $otp = $_SESSION['otp'];
            $contactNumber = $_SESSION['contactNumber'];

            echo $username . "," . $otp . "," . $contactNumber;
            // Inserting data into DB
            // header("Location:?success=" . $success . "&error=" . $error);
        }
    } else {
        $error = "OTP match unsuccessful";
        $success = "Number verified";
        header("Location:otp.php?success=" . $success . "&error=" . $error);
    }
}

// Get ip address how to get the user login

// INSERT INTO `userdetails` (`id`, `name`, `contactno`, `otp`) VALUES ('1', '1satyam', '9005946009', '1234');