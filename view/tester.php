<?php 

include_once '../DAO/EmailServiceClient.php';
include_once '../DAO/userDAO.php';

$mailFromDB = userDAO::getAllMails();
$mailArray = explode("?", $mailFromDB);
$in = $in_array($mail, $mailArray);
$in_array($mail, $mailArray);

var_dump($mailFromDB);
var_dump($mailArray);
var_dump($in_array);
var_dump($in);


?>