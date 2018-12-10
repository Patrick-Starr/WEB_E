<?php

include '../DAO/CoursesDAO.php';
include '../DAO/userDAO.php';
include '../DAO/EmailServiceClient.php';
// include_once '../DAO/DB_Connection.php';
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
            $name = Courses::getCourseName($CID);
            $end = $row["End"];
            $startTimestamp = strtotime($end);
            $school = userDAO::getSchool($UID);

            if ($startTimestamp <= time()) {
                $toEmail = userDAO::getEmail($school);
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