<?php 

include_once '../DAO/userDAO.php';

$mailFromDB = userDAO::getAllMails();
$mailArray = explode("?", $mailFromDB);
$in = $in_array($mail, $mailArray);
$in_array($mail, $mailArray);

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