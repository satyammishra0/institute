<!-- ---------------------- -->
<!-- ------ Routes here ------>
<!-- ---------------------- -->


<?php

// $HOST_NAME = $_SERVER['HTTP_HOST'];
// if ($HOST_NAME == "localhost") {
//     $url = "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
// } else {
//     $url = "https://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
// }

// $url = "http://localhost/GROWUPNEXT/satyam/institute/";
$url = "https://solvealgo.com/";

define('URL', $url);

// Getting the main home path

function homePath()
{
    return URL;
}

// Getting the CSS

function getCss($file_name)
{
    return URL . 'assets/css/' . $file_name;
}


// Getting the Images

function getImg($file_name)
{
    return URL . 'assets/images/' . $file_name;
}

// Getting the JS

function getJs($file_name)
{
    return URL . 'assets/js/' . $file_name;
}


// Defining more componetnts

$includesUrl = "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] . 'includes';

define('INCLUDEPATH', $includesUrl);
