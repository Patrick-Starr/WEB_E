<?php 
include '../header.php';
include "../DAO/userDAO.php";
/*
 * Changes the password in the database with md5
 */
$user = $_SESSION['user'];
$userID = userDAO::getID($user);
$hash = md5($_POST['newPW']);
//$hash="1234567890123456789012345678901234567890abc";
userDAO::changePW($hash, $userID);

header("location:home.php");

?>