<?php
session_start();
include '../function.php';
$userstr = ' (Guest)';

if(isset($_SESSION['user'])){
    $user = $_SESSION['user'];
    $loggedin = true;
    $userstr = " ($user)";
} else $loggedin = false;

if($loggedin){
    echo " logged<br/>";
    echo "<a href='intranet.php'>Intranet</a>";
}else{
    echo "nicht eingeloggt <br/>";
    echo "<a href='login.php'>Login</a>";
}

