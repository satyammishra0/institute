<?php
require_once "../configuration.php";

// Gathering the Information entered by the user

$fileName = $_FILES["course_img"];
$coursePrice = mysqli_real_escape_string($conn, $_POST["course_price"]);
$courseName = mysqli_real_escape_string($conn, $_POST["course_name"]);
$startingDate = mysqli_real_escape_string($conn, $_POST["starting_date"]);
$totalTime = mysqli_real_escape_string($conn, $_POST["total_time"]);
$submitBtn = mysqli_real_escape_string($conn, $_POST["add_course_btn"]);

// Checking the submit btn press

if (isset($submitBtn)) {

    // Checking if any empty
    if (!empty($coursePrice) && !empty($courseName) && !empty($startingDate) && !empty($totalTime)) {
        // Storing image details in new variables 
        $imgName = $fileName['name'];
        $imgCurrentPath = $fileName['tmp_name'];
        $imgError = $fileName['error'];

        // Checking error in image uploading
        if ($imgError == 0) {
            // Destination folder where image will be stored
            $destinationPath = '../assets/images/course_image_upload/' . $imgName;
            move_uploaded_file($imgCurrentPath, $destinationPath);

            // Inserting data into DB
            $addInsertQuery = "INSERT INTO `course-details` (`price`, `course_name`, `starting_date`, `total_course_time`, `file_name`) VALUES ('$coursePrice', '$courseName', '$startingDate', '$totalTime', '$imgName');";
            $addRunQuery = mysqli_query($conn, $addInsertQuery);
            if ($addInsertQuery) {
                $successMessage = "Course Uploaded Successfully . Thanks for adding more 😊 ";

                // Redirection with success message
                header('Location:index.php?success=' . $successMessage);
            } else {

                // Redirection with error message
                $error = 'Some error occured please retry';
                header('Location:index.php?error=' . $error);
            }
        } else {

            // Redirection with error message
            $error = "Wrong image uploaded please retry !! ";
            header('Location:index.php?error=' . $error);
        }
    } else {

        // Redirection with error message
        $error = "Some of the fields are empty !! Please Retry ";
        header('Location:index.php?error=' . $error);
    }
} else {

    // Redirection with error message
    $error = "That's not a right way to come in 🤨";
    header('Location:index.php?error=' . $error);
}

 

// str_replace("\'", `'`, $courseName)
