<?php // header.php

session_start();



require_once 'function.php';

$user = '';

if (isset($_SESSION['user']))
{
    $user     = $_SESSION['user'];
    $loggedin = TRUE;
    $userstr  = $user;
}
else $loggedin = FALSE;

?>