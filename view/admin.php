<!DOCTYPE html>

<?php

include_once '../header.php';
include '../DAO/userDAO.php';


if(isset($_POST['submit'])) {

    if (empty($_POST['id'] or $_POST['name'] or $_POST['strasse'] or $_POST['ort'] or $_POST['strasse'] or $_POST['plz'] or $_POST['email'] or $_POST['passwort'])){

        echo "<script type='text/javascript'>alert('Bitte Formular komplett ausfüllen');</script>";

    }


    else {

        userDAO::create($_POST['id'], $_POST['name'], $_POST['strasse'], $_POST['ort'], $_POST['plz'], $_POST['email'], $_POST['passwort']);

    }

}


?>

<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Register - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="assets/css/MUSA_panel-table-1.css">
    <link rel="stylesheet" href="assets/css/MUSA_panel-table.css">
    <link rel="stylesheet" href="assets/css/smoothproducts.css">
    <link rel="stylesheet" href="assets/css/Table-with-search-1.css">
    <link rel="stylesheet" href="assets/css/Table-with-search.css">
</head>

<body>
<nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar">
    <div class="container">
        <a href="home.php"><img border="0" alt="StuKu" src="../Logo.png" width="150 px" height="67 px"></a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse"
             id="navcol-1">
            <ul class="nav navbar-nav ml-auto">
                <?php if(isset($_SESSION['user'])== 'admin'){ ?>
                <li class="nav-item" role="presentation"><a class="nav-link" href="home.php">Home</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="admin.php">Schule hinzufügen</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="logout.php">Logout</a></li>



                <?php } else if(isset($_SESSION['user'])){ ?>
                <li class="nav-item" role="presentation"><a class="nav-link" href="home.php">Home</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="Intranet.php">Meine Kurse</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="CreateNewModul.php">Kurs hinzufügen</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="pricing.php">Preise</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="aboutus.php">Über uns</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="contactus.php">Kontakt</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="logout.php">Logout</a></li>


                <?php
                }

                else{ ?>
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
    <main class="page registration-page">
        <section class="clean-block clean-form dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Schule hinzufügen</h2>
                    <p>Fügen Sie eine neue Schule hinzu</p>
                </div>
                <form method = "post">
                    <div class="form-group"><label>UserID</label></div><input class="form-control" name = "id" type="number">
                    <div class="form-group"><label for="name">Name</label><input class="form-control item" name = "name" type="text" id="name"></div>
                    <div class="form-group"><label>Strasse</label><input class="form-control" name = "strasse" type="text"></div>
                    <div class="form-group"><label>Ort</label><input class="form-control" name = "ort" type="text"></div>
                    <div class="form-group"><label>Postleitzahl</label><input class="form-control" name = "plz" type="number"></div>
                    <div class="form-group"><label for="email">Email</label><input class="form-control item" name = "email" type="email" id="email"></div>
                    <div class="form-group"><label for="password">Passwort</label><input class="form-control item" name = "passwort" type="password" id="password"></div><button class="btn btn-primary btn-block" name = "submit" type="submit">Hinzufügen</button></form>
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