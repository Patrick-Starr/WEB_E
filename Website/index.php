<!DOCTYPE html>

<html>
	<meta charset="UTF-8">
	
	<head>
		<title>FH - Kurse</title>
		<h1>HOME</h1>
		<link rel = "stylesheet" href = "index.css">
	</head>
	
	<body>
		<header class="navigation">
			<p>
				<a href = "../Website/login.php">Login</a>
			</p>
		</header>
		
		

		<div class="search">
    		Suche: <input type="search" name="searchfield" size="20" /> </br>
		</div>
	
		<?php
// 		// show the table (courses) which are available (data from DB)
// 		$benutzer = "root";
// 		$passwort = "";
// 		$dbname = "Courses";
		
// 		$link = mysqli_connect('localhost', $benutzer, $passwort, $dbname);
		
// 		mysqli_query($link, "SET NAMES 'utf8'"); //Umlaute richtig darstellen
		
// 		$abfrage = "select * from adressen";
// 		$result = mysqli_query($link, $abfrage) or die(mysqli_error($link));
		
// 		//Tabellenkopf darstellen
// 		echo "<table border = \"1\">";
// 		$anzahl_spalten = mysqli_num_fields($result);
// 		echo "<tr>";
// 		for ($i = 0; $i < $anzahl_spalten; $i++) {
// 		    $feldinfo = mysqli_fetch_field_direct($result, $i);
// 		    echo "<th>".$feldinfo->name."</th>";
// 		}
// 		echo "</tr>";
		
// 		//Rest der Tabelle in einer Schleife darstellen
// 		while ($zeile=mysqli_fetch_assoc($result)) /* As long as $result is answering */  {
// 		    echo "<tr>";
// 		    while (list($key, $value) = each($zeile)) {
// 		        echo "<td>".$value."</td>";
// 		    }
// 		    echo "</tr>";
// 		}
// 		echo "</table>";
		
// 		mysqli_close($link);
        ?>
	</body>
	
</html>