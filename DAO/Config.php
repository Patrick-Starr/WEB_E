<?php
/**
 * @author andreas.martin
 */
class Config
{
    protected static $iniFile = "DAO/config.env";
    protected static $config = [];

    public static function init()
    {
        if (file_exists(self::$iniFile)) {
            self::$config = parse_ini_file(self::$iniFile);
        } else if (file_exists("../".self::$iniFile)) {
            self::$config = parse_ini_file("../".self::$iniFile);
        } else {
            self::loadENV();
        }
    }

    public static function get($key)
    {   
        if (empty(self::$config)){
            self::init();
        }
        return self::$config[$key];
    }

    private static function loadENV(){        
        if (isset($_ENV["mysql://ivm1bdn2bi4uux6o:mlxumziv1rkqz7ix@sabaik6fx8he7pua.chr7pe7iynqr.eu-west-1.rds.amazonaws.com:3306/jq7vszrcc65rhjnw"])) {
            $dbopts = parse_url($_ENV["mysql://ivm1bdn2bi4uux6o:mlxumziv1rkqz7ix@sabaik6fx8he7pua.chr7pe7iynqr.eu-west-1.rds.amazonaws.com:3306/jq7vszrcc65rhjnw"]);
            self::$config["database.user"] = $dbopts["user"];
            self::$config["database.host"] = $dbopts["host"];
            self::$config["database.port"] = $dbopts["port"];
            self::$config["database.name"] = ltrim($dbopts["path"], '/');   
            self::$config["database.password"] = $dbopts["pass"];
            
            echo"asdaskassdk";
        }
        if(isset($_ENV["SENDGRID_API_KEY"])){
            self::$config["sendGrid.value"] = $_ENV["SENDGRID_API_KEY"];
        }
    }
}