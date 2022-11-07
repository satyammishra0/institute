<?php
require_once "../configuration.php";

// Gathering the Information entered by the user

$coursePrice = $_POST["course_price"];
$courseName = $_POST["course_name"];
$startingDate = $_POST["starting_date"];
$totalTime = $_POST["total_time"];
$fileName = $_FILES["course_img"];
$submitBtn = $_POST["add_course_btn"];

// Checking the submit btn press

if (isset($submitBtn)) {

    // Checking if any empty
    if (!empty($coursePrice) && !empty($courseName) && !empty($startingDate) && !empty($totalTime)) {
        echo "success";
    } else {
        $error = "Some of the fields are empty !!Please Retry ";
        // header('Location:');
        echo $error;
    }
} else {
    $error = "That's not a right way to come in 🤨";
    // header('Location:');
}

// checking the file data and then inserting data 