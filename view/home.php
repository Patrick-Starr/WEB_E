<!DOCTYPE html>

<?php
include '../header.php';
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
</head>

<body>
<nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar">
    <div class="container"><a class="navbar-brand logo" href="#">StuKu</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse"
             id="navcol-1">
            <ul class="nav navbar-nav ml-auto">
                <li class="nav-item" role="presentation"><a class="nav-link active" href="home.php">Home</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="pricing.php">Preise</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="aboutus.php">Über uns</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="contactus.php">Kontakt</a></li>
                <?php if(isset($_SESSION['user'])){ ?>
                	<li class="nav-item" role="presentation"><a class="nav-link" href="logout.php">Logout</a></li>
				<?php }else{ ?>
                	<li class="nav-item" role="presentation"><a class="nav-link" href="login.php">Login</a></li>
				<?php } ?>
                <li class="nav-item" role="presentation"><a class="nav-link" href="register.php">Registrieren</a></li>
            </ul>
        </div>
    </div>
</nav>
<main>
    <div>
    	<br><br><br><br>
        <h1>Heading</h1>
    </div><div class="form-group pull-right">
        <input type="text" class="search form-control" placeholder="What you looking for?">
    </div>
    <span class="counter pull-right"></span>
    <table class="table table-hover table-bordered results">
        <thead>
        <tr>
            <th>#</th>
            <th class="col-md-5 col-xs-5">Modulname</th>
            <th class="col-md-4 col-xs-4">Ort</th>
            <th class="col-md-4 col-xs-4">VZ/TZ</th>
            <th class="col-md-3 col-xs-3">Dauer</th>
            <th class="col-md-3 col-xs-3">Startdatum</th>
            <th class="col-md-3 col-xs-3">Link</th>

        </tr>
        <tr class="warning no-result">
            <td colspan="4"><i class="fa fa-warning"></i> No result</td>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Balázs Barta</td>
            <td>UI & UX</td>
            <td>Eger</td>
            <td>Eger</td>
            <td>Eger</td>
            <td>Eger</td>
        </tr>

        </tbody>
    </table></main>
<footer class="page-footer dark">
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <h5>Get started</h5>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Sign up</a></li>
                </ul>
            </div>
            <div class="col-sm-3">
                <h5>About us</h5>
                <ul>
                    <li><a href="#">Contact us</a></li>
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