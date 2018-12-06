<?php 

include '../header.php';
include '../DAO/CoursesDAO.php';

$CID = $_GET['wert'];

    Courses::update($CID, $_POST['course'], $_POST['url'], $_POST['duration'], $_POST['run'], $_POST['art'], $_POST['place']);

header("location:Intranet.php");
?>