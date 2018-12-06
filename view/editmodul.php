<!DOCTYPE html>
<?php
include '../header.php';
include '../DAO/CoursesDAO.php';
?>


<html>
<script>
   function validation() {

       if(document.getElementById("1").value === ""){
            alert("Bitte füllen Sie das Formular komplett aus!");
            return false;
       } else if(document.getElementById("2").value === ""){
           alert("Bitte füllen Sie das Formular komplett aus!");
           return false;
       } else if(document.getElementById("3").value === ""){
           alert("Bitte füllen Sie das Formular komplett aus!");
           return false;
       } else if(document.getElementById("4").value === ""){
           alert("Bitte füllen Sie das Formular komplett aus!");
           return false;
       } else if(document.getElementById("5").value === ""){
           alert("Bitte füllen Sie das Formular komplett aus!");
           return false;
       } else if(document.getElementById("6").value === ""){
           alert("Bitte füllen Sie das Formular komplett aus!");
           return false;
       } else {
           return true;
       }

       }

   // open different action when different buttons are pressed
   function submitForm(action) {
	    var form = document.getElementById('fill');
	    if (action === "safe") {
	    	form.action = <?php echo '"CreateCourse.php?wert='.$_GET['wert'].'&click=safe"'; ?>;
	    } else {
	    	form.action = <?php echo '"CreateCourse.php?wert='.$_GET['wert'].'&click=delete"'; ?>;
		}    
	    
	    form.submit();
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
<main class="page contact-us-page">
    <section class="clean-block clean-form dark">
        <div class="container">
            <div class="block-heading">
                <h2 class="text-info">&nbsp;Modul bearbeiten</h2>
                
            <?php
            $CID = $_GET['wert'];
            
            $result = Courses::readCID($CID);
            
            // use variables to fill in text inputs from html down below
            while($zeile = mysqli_fetch_assoc($result)){
                while (list($key, $value) = each($zeile)){
                    if ($key === 'Course') { $_GET['modul'] = $value; }
                    else if ($key === 'Place') { $_GET['ort'] = $value; }
                    else if ($key === 'Link') { $_GET['link'] = $value; }
                    else if ($key === 'Start') { $_GET['start'] = $value; }
                    else if ($key === 'Form') { $_GET['form'] = $value; }
                    else if ($key === 'Duration') { $_GET['dauer'] = $value; }
                }
            }
            ?>
            </div>
             <form name ="Modulerstellen" id="fill" method="post" onsubmit="return validation()">
                <div class="form-group"><label>Modulname</label><input class="form-control" type="text" id="1" name='course' value=<?php echo '"'.$_GET["modul"].'"'?>></div>
                <div class="form-group"><label>Ort</label><input class="form-control" type="text" id="2" name='place' value=<?php echo '"'.$_GET["ort"].'"'?>></div>
                <div class="form-group"><label>Link</label><input class="form-control" type="url" id="3" name='url' value=<?php echo '"'.$_GET["link"].'"'?>></div>
                <div class="form-group"><label>Startdatum</label><input class="form-control" type="date" id="4" name='run' value=<?php echo '"'.$_GET["start"].'"'?>></div>
                <div class="form-group"><label>VZ/TZ</label><input class="form-control" type="text" id="5" name='art' value=<?php echo '"'.$_GET["form"].'"'?>></div>
                <div class="form-group"><label>Dauer</label><input class="form-control" type="number" id="6" name='duration' value=<?php echo '"'.$_GET["dauer"].'"'?>></div>
                   <div class="form-group"><button class="btn btn-primary btn-block" onclick="submitForm('safe')">Speichern</button>
         		<button class="btn btn-primary btn-block" onclick="submitForm('delete')" style="background-color: rgb(248,83,72);">Kurs löschen</button></div>
            </form>
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