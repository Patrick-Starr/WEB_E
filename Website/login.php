<!DOCTYPE html>

<html>
	<meta charset="UTF-8">
	
	<head>
		<title>FH - Kurse</title>
		<h1>Login</h1>
		
		<link rel = "stylesheet" href = "../CSS_Files/login.css">
	</head>
	
	<body>
		<nav>
			<a href = "../Website/index.php">Home</a>
			<a href = "../Website/register.php">Register</a>
			
			<p>
				<a href = "../Website/login.php">Login</a>
			</p>
		</nav>
	
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