<?php 
include '../header.php';
include "../DAO/userDAO.php";

$user = $_SESSION['user'];
$userID = userDAO::getID($user);


userDAO::changePW($_POST['newPW'], $userID);

header("location:home.php");

?>