<!DOCTYPE html>

<?php

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
    <div class="container"><a class="navbar-brand logo" href="home.php">StuKu</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse"
             id="navcol-1">
            <ul class="nav navbar-nav ml-auto">
                <li class="nav-item" role="presentation"><a class="nav-link" href="home.php">Home</a></li>
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
<main class="page pricing-table-page">
    <section class="clean-block clean-pricing dark">
        <div class="container">
            <div class="block-heading">
                <h2 class="text-info">Preise</h2>
                <p>Präsentieren Sie Ihre Kurse einer breiten Öffentlichkeit für nur 30 CHF pro Kurs</p>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-5 col-lg-4">
                    <div class="clean-pricing-item">
                        <div class="heading">
                            <h3>Modul</h3>
                        </div>
                        <p>Ihr Modul wird auf unserer Seite freigeschaltet.</p>
                        <div class="features">
                            <h4><span class="feature">&nbsp;Support:&nbsp;</span><span>Ja</span></h4>
                            <h4><span class="feature">Dauer:&nbsp;</span><span>unlimitiert</span></h4>
                        </div>
                        <div class="price">
                            <h4>CHF 30</h4>
                        </div> <form>
                            <input class ="btn btn-primary btn-block" type="button" value="BUY NOW" onclick="window.location.href='register_1.php'" />
                        </form> </div>
                </div>
            </div>
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
