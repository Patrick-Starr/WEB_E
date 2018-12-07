<?php
include '../header.php';
include '../DAO/CoursesDAO.php';
include '../DAO/userDAO.php';
include 'PDFfile.php';
include '../DAO/EmailServiceClient.php';

// wird ausgeführt, wenn seite neu geladen wird
    $pdf = new PDFcreator();

    $user = $_SESSION['user'];
    $ID = userDAO::getID($user);
    $place = userDAO::getPlace($user);
    $pdfdata =  $pdf->createPDF($ID,$user, $place);

    EmailServiceClient::sendEmailAttachement('RECIEVER-MAIL-ADRESS','Rechnung', "Guten Tag \n Anbei finden Sie Ihre Rechnung.\n Freundliche Grüsse \n StuKu Support",'invoice.pdf');
    Courses::create($ID, $_POST['Modul'], $_POST['Link'], $_POST['Dauer'], $_POST['Start'], $_POST['End'], $_POST['Form'], $_POST['Ort']);

    echo $user;
    echo $ID;
    echo $_POST['Modul'];
    
    header("location:Intranet.php");

?>