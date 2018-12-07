<?php
include "Config.php";

class Database
{

    // initialize the DB - Usage
    public static $cont = null;

    public function __construct()
    {
        die('Init function is not allowed');
    }

    public static function connect()
    {
        $dbName = "jq7vszrcc65rhjnw";        //Config::get('database.name');
        $dbHost = "sabaik6fx8he7pua.chr7pe7iynqr.eu-west-1.rds.amazonaws.com";       //Config::get('database.host');
        $dbUsername = "ivm1bdn2bi4uux6o";       //Config::get('database.user');
        $dbUserPassword = "mlxumziv1rkqz7ix";        //Config::get('database.password');
        // One connection through whole application
        if (null == self::$cont) {
            try {
                self::$cont = mysqli_connect($dbHost, $dbUsername, $dbUserPassword, $dbName);
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }
        return self::$cont;
    }

    /* Close the DB-Connection */
    public static function disconnect()
    {
        self::$cont = null;
    }
}

?>