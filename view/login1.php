<?php // login.php

include_once '../header.php';

echo "<div class='main'><h3>Please enter your details to log in</h3>";

$error = $user = $pass = "";
if (isset($_POST['user']))
{
    $user = sanitizeString($_POST['user']);
    $pass = sanitizeString($_POST['pass']);
    if ($user == "" || $pass == "")
    {
        $error = "Not all fields were entered<br />";
    }
    else
    {
        $result = queryMySQL("SELECT school,password FROM users
        WHERE School='$user' AND Password='$pass'");

        if ($result->num_rows == 0)
        {
            $error = "Invalid login attempt";
        }
        else
        {
            $_SESSION['user'] = $user;
            $_SESSION['pass'] = $pass;
            die("You are now logged in. Please <a href='test.php?view=$user'>" .
                "click here</a> to continue.<br /><br />");
        }
    }
}
echo <<<_END
<form method='post' action='login1.php'>$error
<span class='fieldname'>Username</span><input type='text'
maxlength='16' name='user' value='$user' /><br />
<span class='fieldname'>Password</span><input type='password'
maxlength='16' name='pass' value='$pass' />
_END;
?>
<br />
<span class='fieldname'>&nbsp;</span>
<input type='submit' value='Login' />
</form><br /></div></body></html>