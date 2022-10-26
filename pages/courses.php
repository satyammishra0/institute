<?php

if (!isset($_SESSION['login_value'])) {
    header('location:../auth/contact_number.php');
}
