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
<main>
    <header>
    	<br><br><br><br>
        <h1>Ihre Kurse</h1>
    </header>
    <span class="counter pull-right"></span>
    <table class="table table-hover table-bordered results">
        <thead>
        <tr>
            <th>#</th>
            <th class="col-md-5 col-xs-5">Modulname</th>


        </tr>
        <tr class="warning no-result">
            <td colspan="4"><i class="fa fa-warning"></i> No result</td>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Balázs Barta</td>


        </tr>

        </tbody>
    </table></main>
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
        <?php 
        include '../DAO/CoursesDAO.php';
        //Tabellenkopf darstellen 
        
//         Courses::create(2, "SOJO", "www.fhnw.ch", 2, "2018-02-01" , "VZ", "Olten");
//         $result = Courses::readSearched("FHNW", NULL, "", "");
//         $result = Courses::readMy(2);
//         Courses::update(/*CID*/ 41, "FHNW Schulseite", "https://www.fhnw.ch/de/startseite", null, null, null, null); /* Null if it should not be overwritten */
//         Courses::delete(/*CID*/39); /*param = int*/
        $result = Courses::readALL();
        
        if(isset($result)) {
            
            
        echo "<table border = \"1\">";
        $anzahl_spalten = mysqli_num_fields($result); 
        echo "<tr>";
        for($i = 0; $i < $anzahl_spalten; $i++){
            $feldinfo = mysqli_fetch_field_direct($result, $i); 
            echo "<th>".$feldinfo->name."</th>";
        }
        echo "</tr>";
        //Rest der Tabelle in einer Schleife darstellen
        
        $aa = 0;
        while($zeile = mysqli_fetch_assoc($result)){
             echo "<tr>";
             while (list($key, $value) = each($zeile)){
                 
                 if ($key === 'Link') {
                     echo "<td> <a href=".$value."> Link zum Kurs </a> </td>";
                 } else {
                     echo "<td>".$value."</td>";
                 }
             }   
            echo "</tr>";
        }
        echo "</table>";

        $result = null;
        }
        ?>