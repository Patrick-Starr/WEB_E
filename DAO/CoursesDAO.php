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

/*
 * get creation-date
 * Set timezone to safe the creation date of a new course
 */
date_default_timezone_set("Europe/Zurich");
$timestamp = time();
$date = date("d.m.Y", $timestamp);

class Courses {

    // CREATE
    /*
     *  $date delivers the actual date                          !!!!! Don't forget to put in UID / CID !!!!!!!!
     */
    public function create($UID, $course, $link, $duration, $start, $form, $place) {
        $insert = "INSERT INTO `courses` (`CID`, `UID`, `Course`, `Link`, `Duration`, `Start`, `Form`, `Place`, `Created`)".
        " VALUES (NULL, '$UID', '$course', '$link', '$duration', '$start', '$form', '$place', '$date')";
        
        mysqli_select_db(Database::$cont, Database::$dbName);
        mysqli_query(Database::$cont, "SET NAMES 'utf8'"); // Umlaute richtig darstellen
        
        $db = mysqli_query(Database::$cont, $insert) or die(mysqli_error(Database::$cont));
        
        mysqli_close(Database::$cont);
    }
    
    // READ
    /*
     * Get searched querys from sql
     * readAll = get all data from Database except UID
     */
    public function readAll() {
        $insert = 'SELECT users.School, courses.Course, courses.Duration, courses.Place, courses.Form, courses.Start, courses.Link
                   FROM users
                   INNER JOIN courses
                   ON users.UID = courses.UID';
        
        $result = mysqli_query(Database::$cont, $insert) or die(mysqli_error(Database::$cont));
        
        mysqli_close(Database::$cont);
        return $result;
    }
    
    /*
     * readSearched = get all chosen data from Database (chosen from Dropdown)
     */
    public function readSearched($sSchool, $sDuration, $sPlace, $sForm) {
        $insert = 'SELECT users.School, courses.Course, courses.Duration, courses.Place, courses.Form, courses.Start, courses.Link
                   FROM users
                   INNER JOIN courses
                   ON users.UID = courses.UID
                   WHERE users.School LIKE '%".$sSchool."%'
                    AND courses.Duration LIKE '%".$sDuration."%'
                    AND courses.Place LIKE '%".$sPlace."%'
                    AND courses.Form LIKE '%".$sForm."%'
                   ORDER BY users.School, courses.Course';
        
        $result = mysqli_query(Database::$cont, $insert) or die(mysqli_error(Database::$cont));
        
        mysqli_close(Database::$cont);
        return $result;
    }
    
    
    // UPDATE

    // DELETE
}

?>
    
