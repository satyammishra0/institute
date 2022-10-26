<?php
session_start();
echo $_SESSION['otp'];

if (isset($_POST['submit_btn'])) {

    $time = $date = date('Y-m-d H:i:s');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OTP Authentication</title>
    <!-- ---------------------- -->
    <!-- ------ Routes here ------>
    <!-- ---------------------- -->
    <?php include('../includes/head.php'); ?>
    <!-- ---------------------- -->
    <!-- ------ CSS here ------>
    <!-- ---------------------- -->
    <link rel="stylesheet" href="<?= getCss('global.css'); ?>">
    <link rel="stylesheet" href="<?= getCss('utility.css'); ?>">
    <link rel="stylesheet" href="<?= getCss('footer.css'); ?>">
    <link rel="stylesheet" href="<?= getCss('login.css'); ?>">

</head>

<body>
    <!-- ---------------------- -->
    <!-- ------ Top wave svg here ------>
    <!-- ---------------------- -->
    <div class="top-svg">
        <img src="<?= getImg('login_bg_top.svg'); ?>" alt=" Top svg">
    </div>


    <!-- ---------------------- -->
    <!--  form and logo here   -->
    <!-- ---------------------- -->
    <section class="form-logo-container grid-center">
        <div class="logo-container flex-center">
            <a href="<?= homePath() ?>">
                <img src="<?= getImg('skills_logo.png') ?>" alt="Main logo">
            </a>
        </div>

        <div class="form-container ">
            <!-- <h2>Sign in / Signup in PW SKILLS</h2> -->
            <form action="otp_authentication.php" method="POST">
                <?php
                if (isset($_GET['success'])) {
                    echo "
                     <div class='input-container '>
                    <label class='mobile-lable' for='Number'>OTP</label><br>
                    <input type='number' placeholder='Enter OTP' name='otp'  >
                    </div>";

                    if (isset($_GET['error'])) {
                        $error = $_GET['error'];
                        echo "<div class='error' style='color:red;font-size:12px;'>$error  </div>";
                    }
                } else {
                    $error = 'Please enter contact number';
                    header('location:contact_number.php?error =' . $error);
                }
                ?>
                <br>
                <input type="submit" value="Sign In" name="submit_btn">
            </form>
        </div>
    </section>


    <!-- ---------------------- -->
    <!-- ------ Bottom wave svg here ------>
    <!-- ---------------------- -->
    <div class="bottom-svg flex-center">
        <p>© 2022 by PW Skills Privacy Policy & Terms and Conditions</p>
    </div>
</body>

</html>


<!-- Location:index.php?AccessError=' . $AccessError -->