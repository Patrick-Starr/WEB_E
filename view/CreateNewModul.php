<!DOCTYPE html>
<?php

include '../DAO/CoursesDAO.php';

if ( !empty($_POST)) {
    // keep track validation errors

    $CourseError = null;
    $LinkError = null;
    $DurationError = null;
    $StartError = null;
    $FormError = null;
    $PlaceError = null;

    // keep track post values

    $Course = $_POST['Course'];
    $Link = $_POST['Link'];
    $Duration = $_POST['Duration'];
    $Start = $_POST['Start'];
    $Form = $_POST['Form'];
    $Place = $_POST['Place'];


    // validate input
    $valid = true;

    //Überprüfung Feld: Course
    if (empty($Course)) {
        $CourseError = 'Please enter Course<br/>';
        echo $CourseError;
        $valid = false;
    }
    // Überprüfung Feld: Link
    if (empty($Link)) {
        $LinkError = 'Please enter Link<br/>';
        echo $LinkError;
        $valid = false;

        }
    else if ( !filter_var($Link,FILTER_VALIDATE_URL) ) {
        echo  'Please enter a valid Link<br/>';
        $valid = false;
    }

    //Überprüfung Feld: Duration
    if (empty($Duration)) {
        $DurationError = 'Please enter Duration<br/>';
        echo $DurationError;
        $valid = false;

    }else if ( !filter_var($Duration,FILTER_VALIDATE_INT) ) {
        echo  'Please enter a valid Number<br/>';
        $valid = false;
    }
    //Überprüfung Feld: Form
    if (empty($Form)) {
        $FormError = 'Please enter VZ or TZ<br/>';
        echo $FormError;
        $valid = false;

    }
    //Überprüfung Feld: Place
    if (empty($Place)) {
        $PlaceError = 'Please enter a Place<br/>';
        echo $PlaceError;
        $valid = false;

    }
    // insert data
    if ($valid) {
        Courses::create(2, $Course, $Link, $Duration, $Start, $Form, $Place);
    }

}


?>



<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Contact Us - Brand</title>
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
    <div class="container"><a class="navbar-brand logo" href="#">StuKu</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse"
             id="navcol-1">
            <ul class="nav navbar-nav ml-auto">
                <li class="nav-item" role="presentation"><a class="nav-link" href="index.html">Home</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="pricing.html">Pricing</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="about-us.html">About Us</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="contact-us.html">Contact Us</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="login.html">Login</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="registration.html">Register</a></li>
            </ul>
        </div>
    </div>
</nav>
<main class="page contact-us-page">
    <section class="clean-block clean-form dark">
        <div class="container">
            <div class="block-heading">
                <h2 class="text-info">Neues Modul hinzufügen</h2>
                <p>Fügen Sie ein neues Modul für nur 30 CHF hinzu.</p>
            </div>
            <form>
                <div class="form-group"><label>Modulname</label><input class="form-control" type="text"></div>
                <div class="form-group"><label>Ort</label><input class="form-control" type="text"></div>
                <div class="form-group"><label>Link</label><input class="form-control" type="url"></div>
                <div class="form-group"><label>Startdatum</label><input class="form-control" type="date"></div>
                <div class="form-group"><label>VZ/TZ</label><input class="form-control" type="text"></div>
                <div class="form-group"><label>Dauer</label><input class="form-control" type="number"></div>
                <div class="form-group"><button class="btn btn-primary btn-block" type="submit">Modul verbindlich hinzufügen</button></div>
            </form>

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
                    <li><a href="register_1.php">Sign up</a></li>
                </ul>
            </div>
            <div class="col-sm-3">
                <h5>About us</h5>
                <ul>
                    <li><a href="contactus.php">Contact us</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <p>© 2018 Copyright Text</p>
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