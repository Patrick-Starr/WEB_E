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
    $length = count($mailArray)-1;
    for ($i = 0; $i < $length; $i++) {
        if ("admin@fhnw.ch" === $mailArray[$i]){
            echo "FOCKEN WORKS";
        } else {
            echo "still not";
        }
    }
echo $c;
} catch (Exception $e) {
    echo "c";
}

echo "<br/>";
echo "<br/>";
echo "end";

?>