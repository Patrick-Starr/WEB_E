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

echo "<br/>";
echo "<br/>";
echo "2";
try {
$mailArray = explode("?", $mailFromDB);
$b = var_dump($mailArray);
echo $b;
} catch (Exception $e) {
    echo "b";
}

echo "<br/>";
echo "<br/>";
echo "3";
try {
    if ($in_array("admin@fhnw.ch", $mailArray)) {
        echo "FOCKEN WORKS";
    }
$c = var_dump($in_array);
echo $c;
} catch (Exception $e) {
    echo "c";
}

echo "<br/>";
echo "<br/>";
echo "end";

?>