<?php // header.php

session_start();

// echo "<!DOCTYPE html>\n<html><head><script src='OSC.js'></script>";

require_once 'function.php';

$user = '';

if (isset($_SESSION['user']))
{
    $user     = $_SESSION['user'];
    $loggedin = TRUE;
    $userstr  = $user;
}
else $loggedin = FALSE;

//     echo "<title>$userstr</title>
// //      <link rel='stylesheet'" . //   "href='styles.css' type='text/css' />" .

//     "</head><body><div class='appname'>$userstr</div>";

// if ($loggedin)
// {
//     echo "<br ><ul class='menu'>" .
//         "<li><a href='index.php?view=$user'>Index</a></li>" .
//         "<li><a href='intranet.php'>intranet</a></li>" .
//         "<li><a href='logout.php'>logout</a></li>" .
//         "<li><a href='test.php'>test</a></li></ul>";

// }
// else
// {
//     echo ("<br /><ul class='menu'>" .
//         "<li><a href='login1.php'>Log in</a></li><br />" .
//         "<li><a href='home.php'>Home</a></li><br />" .
//         "<li><a href='register_1.php'>Register</a></li></ul><br />" .
//         "<span class='info'>&#8658; You must be logged in to " .
//         "view this page.</span><br /><br />");
// }
?>