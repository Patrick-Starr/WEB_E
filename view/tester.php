<?php 

include_once '../DAO/userDAO.php';

echo "1";
try {
$mailFromDB = userDAO::getAllMails();
$a = var_dump($mailFromDB);
echo $a;
} catch (Exception $e) {
    echo "a";
}

echo "2";
try {
$mailArray = explode("?", $mailFromDB);
$b = var_dump($mailArray);
echo $b;
} catch (Exception $e) {
    echo "b";
}

echo "3";
try {
$in = $in_array("admin@fhnw.ch", $mailArray);
$c = var_dump($in_array);
echo $c;
} catch (Exception $e) {
    echo "c";
}

echo "4";
try {
$in_array("admin@fhnw.ch", $mailArray);
$d = var_dump($in);
echo $d;
} catch (Exception $e) {
    echo "d";
}

echo "end";

?>