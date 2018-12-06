<?php
/**
 * Created by PhpStorm.
 * User: Startklar
 * Date: 06.12.2018
 * Time: 12:05
 */
include'Dummy.php';
include 'view/checkDate.php';
include 'DAO/CoursesDAO.php';

$cdate = Courses::getEndDate(2,18);


$Dcheker = new checkDate();

$Dcheker->Datecheck($cdate);