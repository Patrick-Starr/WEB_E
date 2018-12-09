<?php
include "Config.php";

class Database
{
    public static $connected;
    // initialize the DB - Usage
    public static $cont = null;

    public function __construct()
    {
        die('Init function is not allowed');
    }

    public static function connect()
    {   
        $connected = true;
        $dbName = Config::get('database.name');
        $dbHost = Config::get('database.host');
        $dbUsername = Config::get('database.user');
        $dbUserPassword = Config::get('database.password');
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