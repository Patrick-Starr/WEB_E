<?php 
$host = 'localhost';
$benutzer="root";
$passwort="";
$dbname="web_e";

mysqli_connect($host, $benutzer, $passwort, $dbname) or die(mysqli_error());

function createTable($name, $query)
{
    queryMysql("CREATE TABLE IF NOT EXISTS $name($query)");
    echo "Table '$name' created or already exists.<br/>";
    
}

function queryMysql($query){
    $result = mysqli_query($query) or die (mysql_error()); 
    return $result; 
}

function destroySession(){
    $_SESSION-array(); 
    
    if(session_id() != "" || isset($_COOKIE[session_name()]))
        setcookie (session_name (), '', time ()-2592000,'/');
    
    session_destroy(); 
    
}


?>
