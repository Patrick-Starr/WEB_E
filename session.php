<?php
include '../function.php';

$userstr = ' (Guest)';

if(isset($_SESSION['user'])){
    $user = $_SESSION['user'];
    $loggedin = true;
    $userstr = " ($user)";
} else $loggedin = false;