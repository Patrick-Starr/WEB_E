<?php // logout.php
include_once '../header.php';
include_once '../DAO/DB_Connection.php';

if (isset($_SESSION['user']))
{
    destroySession();
    echo "<div class='main'>You have been logged out. Please " .
        "<a href='home.php'>click here</a> to refresh the screen.";
}


if (isset(Database::$cont)) {
    Database::disconnect();
}
    
?>