<?php 

include_once '../DAO/userDAO.php';

echo "1";
$mailFromDB = userDAO::getAllMails();
echo "2";
$mailArray = explode("?", $mailFromDB);
echo "3";
$in = $in_array($mail, $mailArray);
echo "4";
$in_array($mail, $mailArray);
echo "5";

try {
$a = var_dump($mailFromDB);
} catch (Exception $e) {
    echo "a";
}
try {
$b = var_dump($mailArray);
} catch (Exception $e) {
    echo "b";
}
try {
$c = var_dump($in_array);
} catch (Exception $e) {
    echo "c";
}
try {
$d = var_dump($in);
} catch (Exception $e) {
    echo "d";
}

echo $a;
echo $b;
echo $c;
echo $d;


?>