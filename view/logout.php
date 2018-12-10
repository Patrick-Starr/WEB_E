<?php // logout.php
include_once '../header.php';
include_once '../DAO/DB_Connection.php';


/*
 * Destroys the session and logs the user out
 */
if (isset($_SESSION['user']))
{
    include 'checkDate.php';
    checkDate::checkStartDate();
    destroySession();
    header("location:home.php");

}


if (isset(Database::$cont)) {
    Database::disconnect();
}

    
?>