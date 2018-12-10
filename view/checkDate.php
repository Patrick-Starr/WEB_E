<?php

include '../DAO/userDAO.php';
include '../DAO/EmailServiceClient.php';
if (!isset(Database::$cont)) {
    Database::connect();
}

class checkDate
{

    public static function checkStartDate()
    {
        mysqli_query(Database::$cont, "SET NAMES 'utf8'");
        $insert = "SELECT CID, UID, End FROM courses";
        $result =  mysqli_query(Database::$cont, stripslashes($insert)) or die(mysqli_error(Database::$cont));
        
        while ($row = mysqli_fetch_assoc($result)) {
            $CID = $row["CID"];
            $UID = $row["UID"];
            $name = userDAO::getSchool($UID);
            $end = $row["End"];
            $startTimestamp = strtotime($end);

            if ($startTimestamp <= time()) {
                $toEmail = "patrick.zioerjen@students.fhnw.ch";
                $subject = "StuKu Anmeldeschluss";
                $htmlData = "Die Anmeldefrist Ihres Kurses: " . $name . " ist abgelaufen. Der Kurs wurde aus der Liste gelöscht";
                EmailServiceClient::sendEmailAttachement($toEmail, $subject, $htmlData, null);

                
                $insert = "DELETE FROM courses WHERE courses.CID = $CID";
                mysqli_query(Database::$cont, stripslashes($insert)) or die(mysqli_error(Database::$cont));
            }
        }
    }
}

?>