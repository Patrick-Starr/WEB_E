<?php
session_start();

include '../session.php';

if($loggedin){
    echo " logged<br/>";
    echo "<a href='intranet.php'>Intranet</a>";
}else{
    echo "nicht eingeloggt <br/>";

    echo "<a href='login.php'>Login</a> <br/>";
}

echo "<a href='test.php'>test</a>";
