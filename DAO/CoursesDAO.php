<!-- Use CRUD - create read update delete  -->

<!-- Code fragments used from https://www.startutorial.com/articles/view/php-crud-tutorial-part-1 -->


<!-- 		  SQL -->
<!-- Create	  INSERT -->
<!-- Read	  SELECT -->
<!-- Update	  UPDATE -->
<!-- Delete	  DELETE -->

<?php

include_once 'DB_Connection.php';
Database::connect();

// get creation-date
// Set timezone to safe the creation date of a new course
date_default_timezone_set("Europe/Zurich");
$timestamp = time();
$date = date("d.m.Y", $timestamp);

class Courses
{

    // CREATE
    // $date delivers the actual date <!-- !!!!!! Don't forget to put in UID / CID !!!!!!!! -->
//     public function create($UID, $course, $link, $duration, $start, $form, $place)
    public function create()
    {
//         $insert = "INSERT INTO `courses` (`CID`, `UID`, `Course`, `Link`, `Duration`, `Start`, `Form`, `Place`, `Created`)".
//         " VALUES (NULL, '$UID', '$course', '$link', '$duration', '$start', '$form', '$place', '$date')";
        
        $insert = "INSERT INTO `courses` (`CID`, `UID`, `Course`, `Link`, `Duration`, `Start`, `Form`, `Place`, `Created`) VALUES (NULL, '2', 'Entrepreneurship', 'www.google.com', '5', '2018-11-22', 'VZ', 'Olten', '1.1.18')";
        
        mysqli_select_db(Database::$cont, Database::$dbname);
        mysqli_query(Database::$cont, "SET NAMES 'utf8'"); // Umlaute richtig darstellen
        mysqli_query(Database::$cont, $insert);
        
        $db = mysqli_query(Database::$cont, $insert) or die(mysqli_error(Database::$cont));
        
        mysqli_close(Database::$cont);
        
        echo "should have worked";
    }
    
    
    // READ

    // UPDATE

    // DELETE
}

?>
    