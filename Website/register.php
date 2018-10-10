<!DOCTYPE html>

<html>
	<meta charset="UTF-8">
	
	<head>
		<title>FH - Kurse</title>
		<h1>Registrierung</h1>
		<link rel = "stylesheet" href = "register.css">
	</head>
	
	<body>
		<div>
			<table class="info">
				<tr>
					<td>Nachname:</td>
    				<td><input type="Nachname" name="Nachname" size="50" /><td> 
				</tr>
				<tr> 
        			<td>Vorname:</td>
        			<td><input type="Vorname" name="Vorname" size="50" /></td>
				</tr>
				<tr> 
        			<td>E-mail Adresse:</td>
        			<td><input type="email" name="email" size="50" /></td>
				</tr>
				<tr> 
        			<td>Passwort: </td>
        			<td><input type="password" name="password" size="50" /></td>
				</tr>
				<tr> 
        			<td>Passwort wiederholen:</td>
        			<td><input type="password" name="passwordAgain" size="50" /></td>
				</tr>
			</table>
	
			<input type="Submit" name="OK" value="Senden" />
			<input type="reset" name="zur&uuml;cksetzen" value="Zur&uuml;cksetzen" />
		</div>
		
        <!-- alert mit "gesendet"	 -->

	<?php 
	?>
	</body>
	
</html>