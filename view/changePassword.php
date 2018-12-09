<?php 
include '../header.php';
include "../DAO/userDAO.php";

$user = S_Session['user'];
userDAO::changePW($_POST['newPW'], $user);

header("location:home.php");

?>