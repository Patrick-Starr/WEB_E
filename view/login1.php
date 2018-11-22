<?php
/**
 * Created by PhpStorm.
 * User: Startklar
 * Date: 22.11.2018
 * Time: 11:08
 */

function queryMysql($query){//
$host = 'localhost';
$benutzer="root";
$passwort="";
$dbname="web_e";

$link = mysqli_connect($host, $benutzer, $passwort, $dbname) or die(mysqli_error());


    $result = mysqli_query($link ,$query);
    return $result;
}

//include "../header.php";

$error = $user = $pass = "";

if (isset($_POST['user']))
{
    $user = ($_POST['user']);
    $pass = ($_POST['pass']);
    if ($user == "" || $pass == "")
    {
        $error = "Not all fields were entered<br />";
    }
    else
    {
        $query = "SELECT School,Password FROM web_e
        WHERE School='$user' AND Password='$pass'";

        if (queryMysql($query))
        {
            $error = "<span class='error'>Username/Password
            invalid</span><br /><br />";
        }
        else
        {
            $_SESSION['user'] = $user;
            $_SESSION['pass'] = $pass;
            die("You are now logged in. Please <a href='intranet.php'>" .
                "click here</a> to continue.<br /><br />");
        }
    }
}

echo <<<_END
<form method='post' action='login1.php'>$error
<span class='fieldname'>Name</span>
<input type='text' maxlength='16' name='user' value='$user' /><br />
<span class='fieldname'>Passwort</span>
<input type='password' maxlength='16' name='pass' value='$pass' /><br />

<br />
<span class='fieldname'>&nbsp;</span>
<input type='submit' value='Login' />
</form>
_END;

?>