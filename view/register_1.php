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
            
            <script type="text/javascript">
            function funktion(){
            	$.ajax({url:"sendMail.php"})
                alert("Ihre Daten werden verarbeitet, Sie werden per E-Mail informiert falls die Registrierung erfolgreich war. Dies kann einige Tage dauern."); 
            }
            </script> 
            
            
	</body>
	
</html>