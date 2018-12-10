<?php

include '../header.php';
include_once '../DAO/EmailServiceClient.php';
/*
 * Sends an Email to sojo.nagaroor@students.fhnw.ch (Admin)
 */
EmailServiceClient::sendEmail('sojo.nagaroor@students.fhnw.ch', 'Contact von ' . $_POST['name'], 'Name: ' . $_POST['name'] . "<br>" . 'Subject: ' . $_POST['subject'] . "<br>" . 'Email: ' . $_POST['email'] . "<br>" . 'Anliegen: ' . $_POST['text']);

header("location:home.php");
?>