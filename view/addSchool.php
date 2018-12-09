<?php 

include_once '../header.php';
include '../DAO/userDAO.php';

$hash = md5($_POST['passwort']);

userDAO::create($_POST['name'], $_POST['strasse'], $_POST['ort'], $_POST['plz'], $_POST['email'], $hash);

header("location: home.php");
?>