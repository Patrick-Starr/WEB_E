<?php
include '../header.php';
include '../DAO/CoursesDAO.php';
include '../DAO/userDAO.php';
include 'PDFfile.php';
include '../DAO/EmailServiceClient.php';

    $pdf = new PDFcreator();

    $user = $_SESSION['user'];
    $ID = userDAO::getID($user);
    $street = userDAO::getPlace($user);
    $postcode = userDAO::getPostcode($user);
    $place = userDAO::getPlace($user);
    $email = userDAO::getEmail($user);


    $pdfdata =  $pdf->createPDF($ID,$user,$street,$postcode, $place,$email);

//     EmailServiceClient::sendEmailAttachement($email,'Rechnung', "Guten Tag \n Anbei finden Sie Ihre Rechnung.\n Freundliche Grüsse \n StuKu Support",'invoice.pdf');
//     Courses::create($ID, $_POST['Modul'], $_POST['Link'], $_POST['Dauer'], $_POST['Start'], $_POST['End'], $_POST['Form'], $_POST['Ort']);

var_dump($email);
    
//     header("location:Intranet.php");

?>