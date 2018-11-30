<?php // logout.php
include_once '../header.php';
include_once '../DAO/DB_Connection.php';

if (isset($_SESSION['user']))
{
    destroySession();
    header("location:home.php");

}


if (isset(Database::$cont)) {
    Database::disconnect();
}
    
?>