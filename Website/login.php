<!DOCTYPE html>

<html>
	<meta charset="UTF-8">
	
	<head>
		<title>Login</title>
		<h4>Login</h4>
		
		<link rel = "stylesheet" href = "login.css">
	</head>
	
	<body>
	
		<form action="login_b.php" method="POST">
		<input type="text" name="email" value="" size="40" /> E-Mail <br/>
		<input type="password" name="passwort" value="" size="40" /> Passwort <br/>
		<input type="submit" name="submit" value="einloggen" />
		<input type="reset" value="nochmals" />
		</form><br/>
		
        <!-- Link to register a new e-mail-adress -->
		<div class="register">
			<a href = "../Website/register.php">Registrieren</a>
		</div>
		
        <!-- Link if someone lost the password -->
		<div class="lostPassword">
			<a href = "../Website/lostPassword.php">Passwort vergessen?</a>
		</div>
		
		<?php
	
	    ?>
	</body>
	
</html>