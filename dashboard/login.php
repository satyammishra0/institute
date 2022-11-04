<?php
require_once "../configuration.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Admin Login</title>
    <!-- ---------------------- -->
    <!-- ------ Routes here ------>
    <!-- ---------------------- -->
    <?php include('../includes/head.php'); ?>
    <!-- ---------------------- -->
    <!-- ------ CSS here ------>
    <!-- ---------------------- -->
    <link rel="stylesheet" href="<?= getCss('global.css'); ?>">
    <link rel="stylesheet" href="<?= getCss('home.css'); ?>">
    <link rel="stylesheet" href="<?= getCss('about.css'); ?>">
    <link rel="stylesheet" href="<?= getCss('utility.css'); ?>">
    <link rel="stylesheet" href="<?= getCss('footer.css'); ?>">
    <link rel="stylesheet" href="<?= getCss('login.css'); ?>">
    <link rel="stylesheet" href="<?= getCss('dashboard.css'); ?>">

</head>

<body>

    <!-- ---------------------- -->
    <!--  form and logo here   -->
    <!-- ---------------------- -->

    <div class="logo-container flex-center" style="margin-top:5%;">
        <a href="<?= homePath() ?>">
            <img src="<?= getImg('skills_logo.png') ?>" alt="Main logo">
        </a>
    </div>
    <center>
        <div class="form-container ">
            <form action="login_check.php" method="POST">
                <div class="input-container">
                    <label class="mobile-lable" for="Email">Email</label><br>
                    <input type="email" placeholder="Enter Your Email" name="admin_email">
                </div>
                <div class="input-container">
                    <label class="mobile-lable" for="Number">Password</label><br>
                    <input type="number" placeholder="Enter Your Password " name="admin_password">
                </div>
                <?php
                if (isset($_GET['error'])) {
                    $error = $_GET['error'];
                    echo "<div class='error' style='color:red;font-size:12px;'>$error</div> ";
                }
                ?>
                <br>

                <input type="submit" value="Sign In" name="submit_btn">
            </form>
        </div>
    </center>
    <!-- ---------------------- -->
    <!-- JS Links Footer ------>
    <!-- ---------------------- -->

    <?php include('../includes/foot-js-links.php'); ?>

</body>

</html>