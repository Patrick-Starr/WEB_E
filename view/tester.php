<?php 

include_once '../DAO/userDAO.php';

$mailFromDB = userDAO::getAllMails();
$mailArray = explode("?", $mailFromDB);
$in = $in_array($mail, $mailArray);
$in_array($mail, $mailArray);

$a = var_dump($mailFromDB);
$b = var_dump($mailArray);
$c = var_dump($in_array);
$d = var_dump($in);

echo $a;
echo $b;
echo $c;
echo $d;


?>