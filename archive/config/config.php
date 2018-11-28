<?php
namespace config;
/**
 * @author andreas.martin
 */
class Config
{
    protected static $iniFile = "archive/config/config.env";
    protected static $config = [];

    public static function init()
    {
        if (file_exists(self::$iniFile)) {
            self::$config = parse_ini_file(self::$iniFile);
        } else if (file_exists("../". self::$iniFile)) {
            self::$config = parse_ini_file("../". self::$iniFile);
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
        if (isset($_ENV["JAWSDB_MARIA_URL"])) {
            $dbopts = parse_url($_ENV["JAWSDB_MARIA_URL"]);
            self::$config["database.user"] = $dbopts["user"];
            self::$config["database.host"] = $dbopts["host"];
            self::$config["database.port"] = $dbopts["port"];
            self::$config["database.name"] = ltrim($dbopts["path"], '/');   
            self::$config["database.password"] = $dbopts["pass"];
        }
        if(isset($_ENV["SENDGRID_API_KEY"])){
            self::$config["sendGrid.value"] = $_ENV["SENDGRID_API_KEY"];
        }
    }
}