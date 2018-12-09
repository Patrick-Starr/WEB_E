<?php

include_once '../DAO/DB_Connection.php';
include_once '../DAO/CoursesDAO.php';
use \mysqli;

class checkcourse{



    public static function checkStartDate()
    {

        global $mysqli;
        $db = Database::connect();
        $mysqli = $db->connect();

        $select = "SELECT CID
                   FROM courses";
        echo($select);
        $result =  $mysqli->query;


        while ($row = mysqli_fetch_assoc($result)) {
            $id = $row["CID"];
            $name = $row["Name"];
            $start = $row["End"];
            $startTimestamp = strtotime($start);
            $control = $row["ControlNumber"];

            if ($control == 0) {
                if ($startTimestamp <= time()) {
                    $toEmail = "deran.surdez@students.fhnw.ch"; // mail noch ergänzen
                    $subject = "StuKu Support";
                    $htmlData = "Your published course " . $name . " has started. Under my courses the course data can be modified as required.";
                    EmailServiceClient::sendEmail($toEmail, $subject, $htmlData);

                    $update = $mysqli->prepare("Update course SET `ControlNumber` = ? WHERE `ID` = ?");
                    $number = 1;
                    $update->bind_param('ii', $number, $id);
                    $update->execute();
                }
            }
        }
    }
}
?>