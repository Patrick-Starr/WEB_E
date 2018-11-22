<?php
/**
 * Created by PhpStorm.
 * User: Startklar
 * Date: 22.11.2018
 * Time: 10:15
 */

include 'function.php';

$userstr = ' (Guest)';

if(isset($_SESSION['user'])){
    $user = $_SESSION['user'];
    $loggedin = true;
    $userstr = " ($user)";
} else $loggedin = false;


if($loggedin){
    echo " logged<br/>";
    echo "<a href='view/home.php'>Home</a>";
    echo "<a href='intranet.php'>Intranet</a>";
}else{
    echo "nicht eingeloggt <br/>";
    echo "<li><a href='view/login.php'>Login</a> <br/></li>";
    echo "<li><a href='view/login.php'>Anmelden</a><br/></li>";
    echo "<li><a href='test.php'>test</a></li>";
}

