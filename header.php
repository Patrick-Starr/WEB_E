<?php // header.php

session_start();

echo "<!DOCTYPE html>\n<html><head><script src='OSC.js'></script>";

require_once 'function.php';

$userstr = 'Welcome Guest';

if (isset($_SESSION['user']))
{
    $user     = $_SESSION['user'];
    $loggedin = TRUE;
    $userstr  = "Logged in as: $user";
}
else $loggedin = FALSE;

    echo "<title>$userstr</title>
//      <link rel='stylesheet'" . //   "href='styles.css' type='text/css' />" .

    "</head><body><div class='appname'>$userstr</div>";

if ($loggedin)
{
    echo "<br ><ul class='menu'>" .
        "<li><a href='index.php?view=$user'>test</a></li>" .
        "<li><a href='intranet.php'>intranet</a></li>" .
        "<li><a href='test.php'>test</a></li></ul>";

}
else
{
    echo ("<br /><ul class='menu'>" .
        "<li><a href='login.php'>Log in</a></li></ul><br />" .
        "<span class='info'>&#8658; You must be logged in to " .
        "view this page.</span><br /><br />");
}
?>