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
                        <tr>
                            <td>1</td>
                            <td>JAVA Course</td>
                            <td>
                                <button class="basic-btn">Update</button>
                                <button class="basic-btn">Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>CSS Course</td>
                            <td>
                                <button class="basic-btn">Update</button>
                                <button class="basic-btn">Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>JS Course</td>
                            <td>
                                <button class="basic-btn">Update</button>
                                <button class="basic-btn">Delete</button>
                            </td>
                        </tr>
                        <tr>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- ---------------------- -->
            <!-- ------Adding new courses   -->
            <!-- ---------------------- -->
            <div class="right-add-course" id="right-add-course">
                <h2>
                    Want to give more to students <br>
                    Let's Add more courses
                </h2>
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