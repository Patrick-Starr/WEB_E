<?php 

include_once '../header.php';
include '../DAO/userDAO.php';

userDAO::create($_POST['name'], $_POST['strasse'], $_POST['ort'], $_POST['plz'], $_POST['email'], $_POST['passwort']);

header("location: home.php");
?>