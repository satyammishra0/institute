<?php
include('../configuration.php');

// print_r($_SESSION);
// exit;

// OTP
echo $_SESSION['otp'];
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


            // Inserting data into DB
            include('../includes/routes.php');
            $insertQuery = "INSERT INTO `userdetails` (`name`, `contactno`, `otp`) VALUES ( '$username', '$contactNumber', '$otp');";
            $runInsertQuery = mysqli_query($conn, $insertQuery);


            // Fetching ID from Database to store in Cookie
            $fetchIdQuery = "SELECT `id` FROM `userdetails` WHERE `contactno`= $contactNumber  ORDER BY `contactno` DESC LIMIT 1;";
            $IdResult = mysqli_query($conn, $fetchIdQuery);
            $IdValue = mysqli_fetch_assoc($IdResult);
            print_r($IdValue['id']);

            // Creating Cookie and storing the ID value on cookie
            setcookie("UserId", $IdValue['id'], time() + (86400 * 30), "/");


            header('Location: ' . homePath() . 'admin/index.php');
        }
    } else {
        $error = "OTP match unsuccessful";
        $success = "Number verified";
        header("Location:otp.php?success=" . $success . "&error=" . $error);
    }
}
