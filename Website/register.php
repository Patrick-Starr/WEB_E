<!DOCTYPE html>

<html>
	<meta charset="UTF-8">
	
	<head>
		<title>FH - Kurse</title>
		<h1>Registrierung</h1>
		<link rel = "stylesheet" href = "register.css">
	</head>
	
	<body>
		<div id="table">
                    <form action="index.php">
			<table class="info">
				<tr>
					<td height="45">Nachname:</td>
    				<td height="45"><input type="Nachname" name="Nachname" size="50" /><td> 
				</tr>
				<tr> 
        			<td height="45">Vorname:</td>
        			<td height="45"><input type="Vorname" name="Vorname" size="50" /></td>
				</tr>
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
                alert("Sie werden registriert"); 
            }
            </script> 
            
            
        <!-- alert mit "gesendet"	 -->

	<?php 
	?>
	</body>
	
</html>