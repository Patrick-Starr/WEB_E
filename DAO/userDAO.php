<!-- Use CRUD - create read update delete  -->

<?php

// include '../header.php';
include_once 'DB_Connection.php';
Database::connect();

class userDAO
{

    public function getID($user)
    {
        $insert = "SELECT users.UID
                   FROM users
                   WHERE School = '$user'";
        
        $result = self::runQuery($insert);
        
        $num = null;
        while($zeile = mysqli_fetch_assoc($result)) {
            while (list ($key, $value) = each($zeile)) {
                $num = $value;
            }
        }
        
        return $num;
    }
    
    public function getPlace($user)
    {
        $insert = "SELECT users.Place
                   FROM users
                   WHERE School = '$user'";
        
        $result = self::runQuery($insert);
        
        $str = null;
        while($zeile = mysqli_fetch_assoc($result)) {
            while (list ($key, $value) = each($zeile)) {
                $str = $value;
            }
        }
        
        return $str;
    }
    
    public function runQuery($query) {
        //mysqli_select_db(Database::$cont, Database::$dbName);
        
        mysqli_query(Database::$cont, "SET NAMES 'utf8'"); // Umlaute richtig darstellen
        // stripslashes() removes all syntax signs like \ or "
        $result = mysqli_query(Database::$cont, stripslashes($query)) or die(mysqli_error(Database::$cont));
        return $result;
    }
    
}

?>

<!-- Good help here! -->
<!-- https://www.startutorial.com/articles/view/php-crud-tutorial-part-1 -->