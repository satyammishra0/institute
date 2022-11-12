<?php
require_once "../configuration.php";

$courseId = $_GET['courseId'];

// Delete course query to be executed

$deleteQuery = "DELETE FROM `course-details` WHERE `course-details`.`id` = $courseId";
$deleteQueryRun = mysqli_query($conn, $deleteQuery);


$successMessage = "Selected course has been deleted Successfully";


if ($deleteQueryRun) {

    // If query runs successfully redirection to Dashboard
    header("Location:index.php?successMessage=" . $successMessage);
} else {

    // If there are some error redirection to Dashboard
    $error = "Some error occured Please try again";
    header("location:index.php?error=" . $error);
}
