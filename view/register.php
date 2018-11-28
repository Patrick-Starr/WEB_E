<!DOCTYPE html>

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
    <div class="container"><a class="navbar-brand logo" href="#">StuKu</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse"
             id="navcol-1">
            <ul class="nav navbar-nav ml-auto">
                <li class="nav-item" role="presentation"><a class="nav-link" href="index.html">Home</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="pricing.html">Pricing</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="about-us.html">About Us</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="contact-us.html">Contact Us</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="login.html">Login</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link active" href="registration.html">Register</a></li>
            </ul>
        </div>
    </div>
</nav>
<main class="page registration-page">
    <section class="clean-block clean-form dark">
        <div class="container">
            <div class="block-heading">
                <h2 class="text-info">Registration</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo.</p>
            </div>
            <form>
                <div class="form-group"><label for="name">Name</label><input class="form-control item" type="text" id="name"></div>
                <div class="form-group"><label for="password">Passwort</label><input class="form-control item" type="password" id="password"></div>
                <div class="form-group"><label for="email">Email</label><input class="form-control item" type="email" id="email"></div><button class="btn btn-primary btn-block" type="submit">Sign Up</button></form>
        </div>
    </section>
</main>
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
            


<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;            

//Load Composer's autoloader
require_once "../phpMailer/vendor/autoload.php";

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.live.com;smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'web_e_fhnw@hotmail.com';                 // SMTP username
    $mail->Password = 'Mixrrad445!';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 465;                                    // TCP port to connect to
    
    //Recipients
    $mail->setFrom('web_e_fhnw@hotmail.com', 'Mailer');
    $mail->addAddress('sojo.nagaroor@students.fhnw.ch', 'SOSCHO');     // Add a recipient
//     $mail->addAddress('ellen@example.com');               // Name is optional
    $mail->addReplyTo('info@example.com', 'Information');
    $mail->addCC('patrick.zioerjen@students.fhnw.ch');
//     $mail->addBCC('bcc@example.com');
    
    //Attachments
//     $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//     $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
    
    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    
    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}

?>




            
            

	
