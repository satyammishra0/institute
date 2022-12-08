<?php
require_once "../configuration.php";

if ($_SESSION['success']) {
    $success = $_SESSION['success'];
} else {
    $error = "You are not the Admin (🙂) ! Please recheck the details";
    header('Location:./admin_login.php?&error=' . $error);
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <!-- ---------------------- -->
    <!-- ------ Routes here ------>
    <!-- ---------------------- -->
    <?php include('../includes/head.php'); ?>
    <!-- ---------------------- -->
    <!-- ------ CSS here ------>
    <!-- ---------------------- -->
    <link rel="stylesheet" href="<?= getCss('global.css'); ?>">
    <link rel="stylesheet" href="<?= getCss('footer.css'); ?>">
    <link rel="stylesheet" href="<?= getCss('utility.css'); ?>">
    <link rel="stylesheet" href="<?= getCss('header.css'); ?>">
    <link rel="stylesheet" href="<?= getCss('home.css'); ?>">
    <link rel="stylesheet" href="<?= getCss('admin_dashboard.css'); ?>">
</head>

<body>

    <!-- ---------------------- -->
    <!-- ------ Main Dashboard  ------>
    <!-- ---------------------- -->

    <section class="dashboard-container grid">
        <!-- ---------------------- -->
        <!-- ------Dashboard left ------>
        <!-- ---------------------- -->
        <div class="dashboard-left">
            <div class="dashboard_logo flex-center-between">
                <img src="<?= getImg('skills_logo.png'); ?>" alt=" Top svg">
                <br>
                <button id="message_admin_btn"><a href="#">Hello, Admin</a></button>
            </div>
            <div class="dashboard-content-list">
                <ul>
                    <li>
                        <button class="flex flex-center" id="all_courses_btn">
                            <ion-icon name="caret-forward"></ion-icon>
                            All Courses
                        </button>
                    </li>
                    <li>
                        <button class="flex flex-center" id="add_courses_btn">
                            <ion-icon name="caret-forward"></ion-icon>
                            Add Course
                        </button>
                    </li>

                </ul>
            </div>
            <div class="dashboard-footer">
                <button onclick="logout_function()">
                    <a href="admin_logout.php">Logout</a>
                </button>
            </div>
        </div>

        <!-- ---------------------- -->
        <!-- ------Dashboard right  -->
        <!-- ---------------------- -->
        <div class="dashboard-right">

            <!-- ---------------------- -->
            <!-- ------All Courses Table-->
            <!-- ---------------------- -->
            <div class="right-all-courses" id="right-all-courses">
                <h2>
                    All Courses
                </h2>
                <table>
                    <thead>
                        <tr>
                            <th>Serial No.</th>
                            <th>Course Name</th>
                            <th>Operations</th>
                        </tr>
                    </thead>
                    <tbody>

                        <!-- ---------------------- -->
                        <!-- Extracting Table data from DB -->
                        <!-- ---------------------- -->
                        <?php

                        // Selecting the Complete Data
                        $extractCoursesQuery = "SELECT * FROM `course-details`;";
                        $runExtractCoursesQuery = mysqli_query($conn, $extractCoursesQuery);

                        // Printing it in table format
                        while ($row = mysqli_fetch_array($runExtractCoursesQuery)) {
                            $courseId = $row['id'];
                            echo "<tr>";
                            echo "<td>" . $row['id'] . "</td>";
                            echo "<td>" . $row['course_name'] . "</td>";
                            echo "<td>
                            <button class='basic-btn'><a href='update_course.php?id=$courseId'>Update</a></button>
                            <button class='basic-btn' onclick='delete_confirmation()'><a href='delete_course.php?id=$courseId'>Delete</a> </button>
                             </td>";
                            echo "</tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>

            <!-- ---------------------- -->
            <!-- ------Adding new courses   -->
            <!-- ---------------------- -->
            <div class="right-add-course" id="right-add-course">
                <div class="dashboard-header">
                    <p id="quote">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fuga autem ut molestiae vel quibusdam pariatur ullam, qui quia delectus libero!</p>
                </div>
                <h2>
                    Want to give more to students <br>
                </h2>
                <!-- ---------------------- -->
                <!-- ------Add Block || Form -->
                <!-- ---------------------- -->
                <section class="addition-form">
                    <!-- ---------------------- -->
                    <!-- ------ Main Addition Form   -->
                    <!-- ---------------------- -->
                    <form action="add_course_processing.php" method="post" enctype='multipart/form-data'>
                        <h2>
                            Let's Add more courses
                        </h2>
                        <!-- Course Price Of Course-->
                        <div class="add_input_conatiner">
                            <label for="course_price">course price</label><br>
                            <input type="text" value="Free" name="course_price"><br>
                            <small>Please enter course Price</small><br>
                        </div>
                        <!-- Course Name Of Course-->
                        <div class="add_input_conatiner">
                            <label for="course_name">Course Name</label><br>
                            <input type="text" name="course_name"><br>
                            <small>Please enter course name</small><br>
                        </div>
                        <!-- Straring Date Of Course-->
                        <div class="add_input_conatiner">
                            <label for="starting_date">starting date</label><br>
                            <input type="text" name="starting_date"><br>
                            <small>Please enter start date (Format:: 10 | jan | 2022)</small><br>
                        </div>
                        <!-- Total Time Of Course-->
                        <div class="add_input_conatiner">
                            <label for="total_time">total time</label><br>
                            <input type="text" name="total_time"><br>
                            <small>Please enter total time of course</small><br>
                        </div>

                        <!-- Image || frame Of Course-->
                        <div class="add_input_conatiner">
                            <label for="total_time">Course Image</label><br>
                            <input type="file" name="course_img"><br>
                            <small>Please enter course image if any</small><br>
                        </div>

                        <!-- Submit Detials Of Course-->
                        <div class="flex-center">
                            <input class="basic-btn" type="Submit" name="add_course_btn" value="submit">
                        </div>

                        <div class="response-message">
                            <p class="success-message">
                                <?php
                                if (isset($_GET['success'])) {
                                    echo $_GET['success'];
                                }
                                ?>
                            </p>
                            <p class="error-message">
                                <?php
                                if (isset($_GET['error'])) {
                                    echo $_GET['error'];
                                }
                                ?>
                            </p>
                        </div>
                    </form>
                </section>


            </div>
        </div>

    </section>


    <!-- ---------------------- -->
    <!--this Pages JS here  ------>
    <!-- ---------------------- -->

    <script src="../assets/js/admin_dashboard.js"></script>
    <!-- ---------------------- -->
    <!-- JS Links Footer ------>
    <!-- ---------------------- -->

    <?php include('../includes/foot-js-links.php'); ?>
</body>

</html>