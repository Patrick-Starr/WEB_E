<?php 

include '../DAO/userDAO.php';

/*
 * deletes User and gets Course ID over URL
 */
userDAO::delete($_GET['wert']);

header("location:adminShowUsers.php");
?>