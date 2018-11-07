<!DOCTYPE html>

<html>
	<meta charset="UTF-8">
	
	<head>
		<title>FH - Kurse</title>
		<h1>Registrierung</h1>
		<link rel = "stylesheet" href = "../CSS_Files/register.css">
	</head>
	
	<body>
		<div id="table">
                    <form action="index.php">
			<table class="info">
				<tr> 
        			<td height="45">E-mail Adresse:</td>
        			<td height="45"><input type="email" name="email" size="50" /></td>
				</tr>
				<tr> 
        			<td height="45">Passwort:</td>
        			<td height="45"><input type="password" name="password" size="50" /></td>
				</tr>
				<tr> 
        			<td height="45">Passwort wiederholen:</td>
        			<td height="45"><input type="password" name="passwordAgain" size="50" /></td>
				</tr>
			</table> </br> </br>
	
                        
                        <input type="Submit" name="OK" value="Senden" onclick="funktion()"/>
			<input type="reset" name="zur&uuml;cksetzen" value="Zur&uuml;cksetzen" />
                        </form>	
		</div>
            
            


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




            
            
            <script type="text/javascript">
            function funktion(){
                alert("Ihre Daten werden verarbeitet, Sie werden per E-Mail informiert falls die Registrierung erfolgreich war. Dies kann einige Tage dauern."); 
            }
            </script> 
            
            
	</body>
	
