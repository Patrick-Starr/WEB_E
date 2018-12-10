<!-- Use CRUD - create read update delete  -->

<?php

// include '../header.php';
include_once 'DB_Connection.php';

if (!isset(Database::$cont)) {
    Database::connect();
}

class userDAO
{

    public static function create($name, $strasse, $ort, $plz, $email, $passwort) {
        $insert = "INSERT INTO users (UID, School, Street, Place, Postcode, email, Password)".
            " VALUES (NULL, '$name', '$strasse', '$ort', '$plz', '$email', '$passwort')";

        self::runQuery($insert);
    }

    public static function changePW($newPW,$UID) {
        $insert = "UPDATE users 
                   set users.Password = '$newPW'
                   WHERE UID = '$UID'";

        self::runQuery($insert);
    }
    
    public static function showUsers() {
        $insert = "SELECT users.School, users.Street, users.Place, users.Postcode, users.email, users.UID
                   FROM users";
        
        $result = self::runQuery($insert);
        
        return $result;
    }

    public static function delete($UID) {
        $insert = "DELETE FROM users
                   WHERE users.UID = '$UID'";
        
        self::runQuery($insert);

        $insert = "DELETE FROM courses
                   WHERE courses.UID = '$UID'";
        
        self::runQuery($insert);
    }

    public static function getID($user)
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
    
    public static function getSchool($UID)
    {
        $insert = "SELECT users.School
                   FROM users
                   WHERE UID = '$UID'";
        
        $result = self::runQuery($insert);
        
        $school = null;
        while($zeile = mysqli_fetch_assoc($result)) {
            while (list ($key, $value) = each($zeile)) {
                $school = $value;
            }
        }
        
        return $school;
    }
 
    public static function getUser($mail)
    {
        $insert = "SELECT users.School
                   FROM users
                   WHERE email = '$mail'";
        
        $result = self::runQuery($insert);
        
        $user = null;
        while($zeile = mysqli_fetch_assoc($result)) {
            while (list ($key, $value) = each($zeile)) {
                $user = $value;
            }
        }
        return $user;
    }
    
    public static function getPlace($user)
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

    public static function updatePassword($email,$password)
    {
        $insert = "UPDATE users
                   set Password = '$password'
                   WHERE email = '$email'";

        $result = self::runQuery($insert);
        return $result;
    }


    public static function getEmail($user)
    {
        $insert = "SELECT users.email
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

    public static function getPostcode($user)
    {
        $insert = "SELECT users.Postcode
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

    public static function getStreet($user)
    {
        $insert = "SELECT users.Street
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


    public static function runQuery($query) {
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