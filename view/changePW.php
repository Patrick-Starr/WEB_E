<!DOCTYPE html>
<?php
include '../header.php';
?>

<html>
<script>
   function validation() {

	   var utf8 = /([\x00-\x7F]|([\xC2-\xDF]|\xE0[\xA0-\xBF]|\xED[\x80-\x9F]|(|[\xE1-\xEC]|[\xEE-\xEF]|\xF0[\x90-\xBF]|\xF4[\x80-\x8F]|[\xF1-\xF3][\x80-\xBF])[\x80-\xBF])[\x80-\xBF])*/g;

	   if (document.getElementById("2").value !== document.getElementById("2").value.match(utf8)[0]) {
           alert("Bitte keine Umlaute verwenden!");
           return false;
	   } else if (document.getElementById("3").value !== document.getElementById("3").value.match(utf8)[0]) {
           alert("Bitte keine Umlaute verwenden!");
           return false;
	   }   else if (document.getElementById("2").value === ""){
           alert("Bitte füllen Sie das Formular komplett aus!");
           return false;
       } else if(document.getElementById("3").value === ""){
           alert("Bitte füllen Sie das Formular komplett aus!");
           return false;
       } else if(document.getElementById("2").length > 20){
           alert("Das Passwort ist zu lange");
           return false;
       } else if (!(document.getElementById("3").value === document.getElementById("2").value)) {
           alert("Ups, da gab es einen Fehler..\nAchten Sie auf die Schreibweise.\nDas wiederholte Passwort muss gleich geschrieben werden wie das neue Passwort.");
           return false;
       } else {
           return true;
       }

       }
</script>


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
 <?php if($loggedin){ ?>
<nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar">
    <div class="container">
    <a href="home.php"><img border="0" alt="StuKu" src="../Logo.png" width="150 px" height="67 px"></a>
    <button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse"
             id="navcol-1">
            <ul class="nav navbar-nav ml-auto">
                <?php if(isset($_SESSION['user']) && $_SESSION['user']=== 'Admin'){ ?>
                <li class="nav-item" role="presentation"><a class="nav-link" href="home.php">Home</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="admin.php">Schule hinzufügen</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="adminShowUsers.php">Schulen anzeigen</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="changePW.php">Passwort wechseln</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="logout.php">Logout</a></li>
                <?php } else if(isset($_SESSION['user'])){ ?>
                <li class="nav-item" role="presentation"><a class="nav-link" href="home.php">Home</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="Intranet.php">Meine Kurse</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="CreateNewModul.php">Kurs hinzufügen</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="aboutus.php">Über uns</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="contactus.php">Kontakt</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="changePW.php">Passwort wechseln</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="logout.php">Logout</a></li>
                <?php } else { ?>
                <li class="nav-item" role="presentation"><a class="nav-link" href="home.php">Home</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="aboutus.php">Über uns</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="contactus.php">Kontakt</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="login.php">Login</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="register.php">Registrieren</a></li>
                <?php } ?>
            </ul>
        </div>
    </div>
</nav>
<main class="page contact-us-page">
    <section class="clean-block clean-form dark">
        <div class="container">
            <div class="block-heading">
                <h2 class="text-info">Passwort ändern</h2>
            </div>
            <form name="Passwortwechsel" action="changePassword.php" method="POST" onsubmit="return validation()">
                <div class="form-group"><label>Neues Passwort</label><input class="form-control" type="password" name="newPW" id = "2" maxlength="20"></div>
                <div class="form-group"><label>Passwort wiederholen</label><input class="form-control" type="password" name="newAgain" id = "3" maxlength="20" ></div>
                <div class="form-group"><button class="btn btn-primary btn-block" type="submit">Passwort wechseln</button></div>
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
                    <?php if(!isset($_SESSION['user'])){ ?>
                    <li><a href="register.php">Registrieren</a></li>
                    <?php } ?>
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
  <?php } else { echo "Dazu haben Sie keine Berechtigung"; } ?>
</body>

</html>
