<?php
$host = 'sabaik6fx8he7pua.chr7pe7iynqr.eu-west-1.rds.amazonaws.com';
$benutzer="ivm1bdn2bi4uux6o";
$passwort="mlxumziv1rkqz7ix";
$dbname="jq7vszrcc65rhjnw";

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
    if ($result->num_rows)
    {
        $row = $result->fetch_array(MYSQLI_ASSOC);
        echo stripslashes($row['text']) . "<br style='clear:left;'><br>";
    }
    else echo "<p>Nothing to see here, yet</p><br>";
}



?>
