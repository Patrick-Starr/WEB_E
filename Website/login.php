<!DOCTYPE html>

<html>
	<meta charset="UTF-8">
	
	<head>
		<title>Login</title>
		<h4>Login</h4>
	</head>
	
	<body>
	
		<form action="login_b.php" method="POST">
		<input type="text" name="email" value="" size="40" /> E-Mail <br/>
		<input type="password" name="passwort" value="" size="40" /> Passwort <br/>
		<input type="submit" name="submit" value="einloggen" />
		<input type="reset" value="nochmals" />
		</form><br/>
		<a href="login_erf.php">Login erfassen </a><br/>
		<a href="login-reset-form.php">Passwort vergessen?</a><br/>
	
		<?php
	
	    ?>
	</body>
	
</html>