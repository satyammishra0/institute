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
            <div class="dashboard-content-list-update-pg">
                <ul>
                    <li>
                        <a href="./index.php">
                            <button class="flex flex-center">
                                <ion-icon name="caret-forward"></ion-icon>
                                Home
                            </button>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="dashboard-footer">
                <button>
                    <a href="admin_logout.php">Logout</a>
                </button>
            </div>
        </div>

        <!-- ---------------------- -->
        <!-- ------Dashboard right  -->
        <!-- ---------------------- -->
        <div class="dashboard-right">


            <!-- ---------------------- -->
            <!-- ------Adding new courses   -->
            <!-- ---------------------- -->
            <div class="right-add-course" id="right-add-course">
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

    <!-- <script src="../assets/js/admin_dashboard.js"></script> -->
    <!-- ---------------------- -->
    <!-- JS Links Footer ------>
    <!-- ---------------------- -->

    <?php include('../includes/foot-js-links.php'); ?>
</body>

</html>

<!-- Update the Update section and extracting the data from DB -->