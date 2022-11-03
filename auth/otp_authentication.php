<?php
session_start();
print_r($_SESSION);
exit;


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

            // Creating Cookie
            // setcookie("Username", $username, time() + (86400 * 30), "/");
            $_SESSION['site1_username'] = $username;
            // Inserting data into DB
            include('../configuration.php');
            include('../includes/routes.php');
            $insertQuery = "INSERT INTO `userdetails` (`name`, `contactno`, `otp`) VALUES ( '$username', '$contactNumber', '$otp');";
            $runInsertQuery = mysqli_query($conn, $insertQuery);
            header('Location: ' . homePath() . 'admin/index.php');
        }
    } else {
        $error = "OTP match unsuccessful";
        $success = "Number verified";
        header("Location:otp.php?success=" . $success . "&error=" . $error);
    }
}
