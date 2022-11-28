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
        $courseId = $_SESSION['courseId'];

        // Checking error in image uploading
        if ($imgError == 0) {
            // Destination folder where image will be stored
            $destinationPath = '../assets/images/course_image_upload/' . $imgName;
            move_uploaded_file($imgCurrentPath, $destinationPath);

            // Update query for DB
            $updateQuery = "UPDATE `course-details` SET `price`='$coursePrice',`course_name`='$courseName',`starting_date`='$startingDate',`total_course_time`='$totalTime',`file_name`='$imgName' WHERE `course-details`.`id` = $courseId;";

            $updateRunQuery = mysqli_query($conn, $updateQuery);
            if ($updateRunQuery) {
                $successMessage = "Course Updated Successfully . Thanks for Contribution 😊 ";

                // Redirection with success message
                header('Location:index.php?success=' . $successMessage);
            } else {
                $error = 'Some error occured please retry';
                header('Location:index.php?error=' . $error);
            }
        } else {
            $error = "Wrong image uploaded please retry !! ";
            header('Location:index.php?error=' . $error);
        }
    } else {
        $error = "Some of the fields are empty !! Please Retry ";
        header('Location:index.php?error=' . $error);
    }
} else {
    $error = "That's not a right way to come in 🤨";
    header('Location:index.php?error=' . $error);
}

 

// str_replace("\'", `'`, $courseName)
