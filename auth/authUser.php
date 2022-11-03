<?php
class authUser
{
    function __construct()
    {
        session_start();
    }

    function isLoggedIn()
    {
        return isset($_SESSION['my_user_name']);
    }

    function login($user)
    {
        $_SESSION['my_user_name'] = $user;
    }
}
