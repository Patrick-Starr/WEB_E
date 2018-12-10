<?php

include '../DAO/userDAO.php';
include '../DAO/EmailServiceClient.php';
if (!isset(Database::$cont)) {
    Database::connect();
}

class checkDate
{

    /*
     *  checks if a date of a course lies in the past (End)
     *  every course from the past gets deleted and a mail will be sent to the user to inform them about
     */
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
            $mail = userDAO::getEmail($name);

            if ($startTimestamp <= time()) {
                $toEmail = $mail;
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