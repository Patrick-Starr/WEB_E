<?php

include '../header.php';
include_once '../DAO/EmailServiceClient.php';

EmailServiceClient::sendEmail('deran.surdez@students.fhnw.ch', 'Contact von ' . $_POST['name'], 'Name: ' . $_POST['name'] . "<br>" . 'Subject: ' . $_POST['subject'] . "<br>" . 'Email: ' . $_POST['email'] . "<br>" . 'Anliegen: ' . $_POST['text']);

header("location:home.php");
?>