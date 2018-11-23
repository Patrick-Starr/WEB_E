<!-- Use CRUD - create read update delete  -->

<?php


include_once 'DB_Connection.php';
Database::connect();


class userDAO
{


    public function checkUser($user, $pass)
    {
        $error = $user = $pass = "";
        $user = ($_POST['user']);
        $pass = ($_POST['pass']);
        if ($user == "" || $pass == "") {
            echo "hier";
            $error = "Not all fields were entered<br />";
        } else {
            $query = "SELECT School,Password FROM web_e
                WHERE School='$user' AND Password='$pass'";

            if (mysqli_query(database::$cont, $query)) {
                $error = "<span class='error'>Username/Password
            invalid</span><br /><br />";
            } else {

                $_SESSION['user'] = $user;
                $_SESSION['pass'] = $pass;
                die("You are now logged in. Please <a href='../view/test.php'>" .
                    "click here</a> to continue.<br /><br />");


            }
        }
    }//Function
}

?>

<!-- Good help here! -->
<!-- https://www.startutorial.com/articles/view/php-crud-tutorial-part-1 -->