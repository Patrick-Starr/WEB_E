<?php
$host = 'localhost';
$benutzer="root";
$passwort="";
$dbname="web_e";

$link = mysqli_connect($host, $benutzer, $passwort, $dbname) or die(mysqli_error());
if ($link->connect_error) die("Fatal Error");

function createTable($name, $query)
{
    queryMysql("CREATE TABLE IF NOT EXISTS $name($query)");
    echo "Table '$name' created or already exists.<br>";
}
function queryMysql($query)
{
    global $link;
    $result = $link->query($query);
    if (!$result) die("Fatal Error");
    return $result;
}

function destroySession()
{
    $_SESSION=array();

    if (session_id() != "" || isset($_COOKIE[session_name()]))
        setcookie(session_name(), '', time()-2592000, '/');

    session_destroy();
    
}

function sanitizeString($var)
{
    global $link;
    $var = strip_tags($var);
    $var = htmlentities($var);
    if (get_magic_quotes_gpc())
      $var = stripslashes($var);
    return $link->real_escape_string($var);
}

function showProfile($user)
{
    $result = queryMysql("SELECT * FROM users WHERE School='$user'");
    if (mysql_num_rows($result))
    {
        $row = mysql_fetch_row($result);
        echo stripslashes($row[1]) . "<br clear=left /><br/>";
    }
}



?>
