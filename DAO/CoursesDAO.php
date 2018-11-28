<!-- Use CRUD - create read update delete  -->

<!-- Code fragments used from https://www.startutorial.com/articles/view/php-crud-tutorial-part-1 -->

<!-- These File contains CRUD-Functions -->
<!-- create(param); -->
<!-- readALL(); return table-->
<!-- readSearched(param); return table -->
<!-- readMy(param); return tabel  -->
<!-- update(param); -->
<!-- delete(param); -->

<?php

include_once 'DB_Connection.php';
Database::connect();


class Courses {

    // CREATE
    /*
     *  $date delivers the actual date
     */
    public function create($UID, $course, $link, $duration, $start, $form, $place) {
        /*
         * get creation-date
         * Set timezone to safe the creation date of a new course
         */
        date_default_timezone_set("Europe/Zurich");
        $timestamp = time();
        $date = date("Y-m-d", $timestamp);
        
        $insert = "INSERT INTO courses (CID, UID, Course, Link, Duration, Start, Form, Place, Created)".
        " VALUES (NULL, '$UID', '$course', '$link', '$duration', '$start', '$form', '$place', '$date')";
        
        self::runQuery($insert);
    }
    
    // READ
    /*
     * Get searched querys from sql
     * readAll = get all data from Database except UID
     */
    public function readAll() {
        $insert = "SELECT users.School, courses.Course, courses.Duration, courses.Place, courses.Form, courses.Start, courses.Link
                   FROM users
                   INNER JOIN courses
                   ON users.UID = courses.UID
                   ORDER BY courses.Course";

        $result = self::runQuery($insert);
        return $result;
    }
    
    /*
     * readSearched = get all chosen data from Database (chosen from Dropdown)
     */
    public function readSearched($sSchool, $sDuration, $sPlace, $sForm) {
        $insert = "SELECT users.School, courses.Course, courses.Duration, courses.Place, courses.Form, courses.Start, courses.Link
                   FROM users
                   JOIN courses
                   ON users.UID = courses.UID
                   WHERE users.School LIKE '%".$sSchool."%'
                    AND courses.Duration LIKE '%".$sDuration."%'
                    AND courses.Place LIKE '%".$sPlace."%'
                    AND courses.Form LIKE '%".$sForm."%'
                   ORDER BY courses.Course";
        
        $result = self::runQuery($insert);
        return $result;
    }
    
    /*
     * readMy = get only the courses from the logged in user
     */
    public function readMy($myUID) {
        $insert = "SELECT users.School, courses.Course, courses.Duration, courses.Place, courses.Form, courses.Start, courses.Link
                   FROM users
                   INNER JOIN courses
                   ON users.UID = courses.UID
                   WHERE users.UID = '$myUID'
                   ORDER BY courses.Course";
        
        $result = self::runQuery($insert);
        return $result;
    }
    
    // UPDATE
    public function update($uCID, $uCourse, $uLink, $uDuration, $uStart, $uForm, $uPlace) {
        $comma = false; //boolean
        $insert = "UPDATE courses SET ";
        
        if (isset($uCourse)) {
            $insert = $insert."Course = '$uCourse'";
            $comma = true;
        }
        if (isset($uLink)) {
            if ($comma) { $insert = $insert.", "; }
            $insert = $insert."Link = '$uLink'";
            $comma = true;
        }
        if (isset($uDuration)) {
            if ($comma) { $insert = $insert.", "; }
            $insert = $insert."Duration = '$uDuration'";
            $comma = true;
        }
        if (isset($uStart)) {
            if ($comma) { $insert = $insert.", "; }
            $insert = $insert."Start = '$uStart'";
            $comma = true;
        }
        if (isset($uForm)) {
            if ($comma) { $insert = $insert.", "; }
            $insert = $insert."Form = '$uForm'";
            $comma = true;
        }
        if (isset($uPlace)) {
            if ($comma) { $insert = $insert.", "; }
            $insert = $insert."Place = '$uPlace'";
            $comma = true;
        }
        $insert = $insert." WHERE courses.CID = $uCID";

        if ($comma) {
            self::runQuery($insert);
        }
    }

    // DELETE
    public function delete($dCID) {
        $insert = "DELETE FROM courses
                   WHERE courses.CID = $dCID";
        
        self::runQuery($insert);
    }
    
    
    /*
     * Runs the queries from above                                  -       CLOSE THE CONNECTION IN DB_Connection.php per Session!!!
     */
    public function runQuery($query) {
        mysqli_select_db(Database::$cont, Database::$dbName);
        
        mysqli_query(Database::$cont, "SET NAMES 'utf8'"); // Umlaute richtig darstellen
        // stripslashes() removes all syntax signs like \ or "
        $result = mysqli_query(Database::$cont, stripslashes($query)) or die(mysqli_error(Database::$cont));
        
        return $result;
    }
    
}

?>
    
