<?php 

include '../header.php';
include '../DAO/CoursesDAO.php';

/*
 * Handles the two buttons save and delete.
 */
$CID = $_GET['wert'];
$click = $_GET['click'];

if ($click === "delete") {
    Courses::delete($CID);
}

if ($click === "safe") {
    Courses::update($CID, $_POST['course'], $_POST['url'], $_POST['duration'], $_POST['run'], $_POST['end'], $_POST['art'], $_POST['place']);
}

    header("location:Intranet.php");
?>