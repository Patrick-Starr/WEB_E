<?php

include_once '../header.php';
include_once '../DAO/EmailServiceClient.php';


EmailServiceClient::sendEmailAttachement('deran.surdez@students.fhnw.ch', 'blub', 'szene');

?>