<?php

class Database
{

    // initialize the DB - Usage
     static $dbName = 'web_e';
     static $dbHost = 'localhost';
     static $dbUsername = 'root';
     static $dbUserPassword = '';
    public static $cont = null;

    public function __construct()
    {
        die('Init function is not allowed');
    }

    public static function connect()
    {
        // One connection through whole application
        if (null == self::$cont) {
            try {
                self::$cont = mysqli_connect(self::$dbHost, self::$dbUsername, self::$dbUserPassword, self::$dbName);
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }
        return self::$cont;
    }
        
    public static function disconnect()
    {
        self::$cont = null;
    }
    
}

?>