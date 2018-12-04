<!DOCTYPE html>


<?php // login.php

include_once '../header.php';

// echo "<div class='main'><h3>Please enter your details to log in</h3>";

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
          /*  die("You are now logged in. Please <a href='test.php?view=$user'>" .
                "click here</a> to continue.<br /><br />");*/
            header("location:home.php");
            exit;
        }
    }
}

?>


<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>StuKu</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="assets/css/MUSA_panel-table-1.css">
    <link rel="stylesheet" href="assets/css/MUSA_panel-table.css">
    <link rel="stylesheet" href="assets/css/smoothproducts.css">
    <link rel="stylesheet" href="assets/css/Table-with-search-1.css">
    <link rel="stylesheet" href="assets/css/Table-with-search.css">
    <link rel="icon" href="../Tab.png">    
</head>

<body>
<nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar">
    <div class="container">
    <a href="home.php"><img border="0" alt="StuKu" src="../Logo.png" width="150 px" height="67 px"></a>
    <button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse"
             id="navcol-1">
            <ul class="nav navbar-nav ml-auto">
               <?php if(isset($_SESSION['user'])){ ?>
                <li class="nav-item" role="presentation"><a class="nav-link" href="home.php">Home</a></li>
               	<li class="nav-item" role="presentation"><a class="nav-link" href="Intranet.php">Meine Kurse</a></li>
               	<li class="nav-item" role="presentation"><a class="nav-link" href="CreateNewModul.php">Kurs hinzufügen</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="pricing.php">Preise</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="aboutus.php">Über uns</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="contactus.php">Kontakt</a></li>
               	<li class="nav-item" role="presentation"><a class="nav-link" href="logout.php">Logout</a></li>
				<?php }else{ ?>
                <li class="nav-item" role="presentation"><a class="nav-link" href="home.php">Home</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="pricing.php">Preise</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="aboutus.php">Über uns</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="contactus.php">Kontakt</a></li>
               	<li class="nav-item" role="presentation"><a class="nav-link" href="login.php">Login</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="register.php">Registrieren</a></li>
				<?php } ?>
            </ul>
        </div>
    </div>
</nav>
<main class="page login-page">
    <section class="clean-block clean-form dark">
        <div class="container">
            <div class="block-heading">
                <h2 class="text-info">Login</h2>
            </div>
            <form method="post">
                <div class="form-group"><label for="email">Email</label><input name="user" class="form-control item" type="text" id="user"></div>
                <div class="form-group"><label for="password">Password</label><input name="pass" class="form-control" type="password" id="password"></div>
                <div class="form-group">
                    <div><a href = "lostPassword.php">Passwort vergessen</div>
                </div><button class="btn btn-primary btn-block" type="submit">Login</button></form>
        </div>
    </section>
</main>
<footer class="page-footer dark">
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <h5>Get started</h5>
                <ul>
                    <li><a href="home.php">Home</a></li>
                    <li><a href="register.php">Registrieren</a></li>
                </ul>
            </div>
            <div class="col-sm-3">
                <h5>Über uns</h5>
                <ul>
                    <li><a href="contactus.php">Kontakt</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <p>© 2018</p>
    </div>
</footer>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
<script src="assets/js/smoothproducts.min.js"></script>
<script src="assets/js/Table-with-search.js"></script>
<script src="assets/js/theme.js"></script>
</body>

</html>