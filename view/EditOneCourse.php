<?php 

include '../header.php';
include '../DAO/CoursesDAO.php';
include '../DAO/userDAO.php';

echo "ASSA";
var_dump($_POST);
var_dump($_GET);

echo $_POST['CN'];

if(isset($_POST['CN'])) {
    $ID = userDAO::getID($user);
    $CID = Courses::getCID($ID, $_POST['CN'], $_POST['CF']);

    Courses::update($CID, $_POST['CN'], $_POST['CU'], $_POST['CD'], $_POST['CS'], $_POST['CF'], $_POST['CP']);
}
?>