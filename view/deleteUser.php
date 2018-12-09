<?php 

include '../DAO/userDAO.php';

userDAO::delete($_GET['wert']);

header("location:adminShowUsers.php");
?>