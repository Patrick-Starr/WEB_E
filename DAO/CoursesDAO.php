<!-- Use CRUD - create read update delete  -->

<!-- Code fragments used from https://www.startutorial.com/articles/view/php-crud-tutorial-part-1 -->

<!-- These File contains CRUD-Functions -->
<!-- create(param); -->
<!-- readALL(); return table-->
<!-- readCID(param); return table -->
<!-- readSearched(param); return table -->
<!-- readMy(param); return table  -->
<!-- update(param); -->
<!-- delete(param); -->
<!-- getCID(param); returnInt -->
<!-- getEndDate(param); returnDate AS String -->

<?php

include_once 'DB_Connection.php';
if (!Database::$connected) {
    Database::connect();
}


class Courses {

    // CREATE
    /*
     *  $date delivers the actual date
     */
    public static function create($UID, $course, $link, $duration, $start, $end, $form, $place) {
        /*
         * get creation-date
         * Set timezone to safe the creation date of a new course
         */
        date_default_timezone_set("Europe/Zurich");
        $timestamp = time();
        $date = date("Y-m-d", $timestamp);
        
        $insert = "INSERT INTO courses (CID, UID, Course, Link, Duration, Start, End, Form, Place, Created)".
        " VALUES (NULL, '$UID', '$course', '$link', '$duration', '$start', '$end', '$form', '$place', '$date')";
        
        self::runQuery($insert);
    }
    
    // READ
    /*
     * Get searched querys from sql
     * readAll = get all data from Database except UID
     */
    public static function readAll() {

        $insert = "SELECT users.School, courses.Course, courses.Duration, courses.Place, courses.Form, courses.Start, courses.End, courses.Link
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
    public static function readSearched($sSchool, $sDuration, $sPlace, $sForm) {
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
     * get Courses by CID
     */
    public static function readCID($CID) {
        $insert = "SELECT courses.Course, courses.Place, courses.Link, courses.Start, courses.End, courses.Form, courses.Duration
                   FROM courses
                   WHERE courses.CID = $CID";
        
        $result = self::runQuery($insert);
        return $result;
    }
    
    /*
     * readMy = get only the courses from the logged in user
     */
    public static function readMy($myUID) {
        $insert = "SELECT users.School, courses.Course, courses.Duration, courses.Place, courses.Form, courses.Start, courses.End, courses.Link
                   FROM users
                   INNER JOIN courses
                   ON users.UID = courses.UID
                   WHERE users.UID = '$myUID'
                   ORDER BY courses.Course";

        $result = self::runQuery($insert);
        return $result;
    }

    public static function readMyEndDate($myUID) {
        $insert = "SELECT  courses.End
                   FROM users
                   INNER JOIN courses
                   ON users.UID = courses.UID
                   WHERE users.UID = '$myUID'
                   ORDER BY courses.Course";

        $result = self::runQuery($insert);
        return $result;
    }

    // UPDATE
    public static function update($uCID, $uCourse, $uLink, $uDuration, $uStart, $uEnd, $uForm, $uPlace) {
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
        if (isset($uEnd)) {
            if ($comma) { $insert = $insert.", "; }
            $insert = $insert."End = '$uEnd'";
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
    public static function delete($dCID) {
        $insert = "DELETE FROM courses
                   WHERE courses.CID = $dCID";
        
        self::runQuery($insert);
    }
    
    /*
     * Get the CourseID
     */
    public static function getCID($UID, $Course, $Form) {
        $insert = "SELECT courses.CID
                   FROM courses
                   WHERE courses.UID = '$UID'
                   AND courses.Course = '$Course'
                   AND courses.Form = '$Form'";
        
        $result = self::runQuery($insert);
        
        $num = null;
        while($zeile = mysqli_fetch_assoc($result)) {
            while (list ($key, $value) = each($zeile)) {
                $num = $value;
            }
        }
        return $num;
    }
    
    /*
     * Get the Date where the last signings for the course are possible
     */
    public static function getEndDate($UID, $CID) {
        $insert = "SELECT courses.End
                   FROM courses
                   WHERE courses.UID = '$UID'
                   AND courses.CID = '$CID'";
        
        $result = self::runQuery($insert);
        
        $date = null;
        while($zeile = mysqli_fetch_assoc($result)) {
            while (list ($key, $value) = each($zeile)) {
                $date = $value;
            }
        }
        return $date;
    }
    
    /*
     * Runs the queries from above                                  -       CLOSE THE CONNECTION IN DB_Connection.php per Session!!!
     */
    public static function runQuery($query) {
        //mysqli_select_db(Database::$cont, Database::$dbName);
        
        mysqli_query(Database::$cont, "SET NAMES 'utf8'"); // Umlaute richtig darstellen
        // stripslashes() removes all syntax signs like \ or "
        $result = mysqli_query(Database::$cont, stripslashes($query)) or die(mysqli_error(Database::$cont));
        
        return $result;
    }
    
}

?>
    
