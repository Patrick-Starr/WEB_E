<?php 

include '../DAO/userDAO.php';

/*
 * deletes User
 */
userDAO::delete($_GET['wert']);

header("location:adminShowUsers.php");
?>