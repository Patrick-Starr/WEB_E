<!DOCTYPE html>

<html>
<meta charset="UTF-8">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">


<!-- Die 3 Meta-Tags oben *mÃ¼ssen* zuerst im head stehen; jeglicher sonstiger head-Inhalt muss *nach* diesen Tags kommen -->
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css"
	integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
	crossorigin="anonymous">
<title>FH - Kurse</title>
<h1>HOME</h1>
<!-- Bootstrap -->
<link href="../css/bootstrap.min.css" rel="stylesheet">
<!-- UnterstÃ¼tzung fÃ¼r Media Queries und HTML5-Elemente in IE8 Ã¼ber HTML5 shim und Respond.js -->
<!-- ACHTUNG: Respond.js funktioniert nicht, wenn du die Seite Ã¼ber file:// aufrufst -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>


	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<a class="navbar-brand" href="#">FH-Kurse</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse"
			data-target="#navbarSupportedContent"
			aria-controls="navbarSupportedContent" aria-expanded="false"
			aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item"><a class="nav-link active"
					href="view/index.php">Home</a></li>
				<li class="nav-item"><a class="nav-link disabled"
					href="view/login.php">Login</a></li>
				<li class="nav-item"><a class="nav-link" href="view/register.php">Register</a>
				</li>
			</ul>
			<form class="form-inline my-2 my-lg-0">
				<input class="form-control mr-sm-2" type="search"
					placeholder="Search" aria-label="Search">
				<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
			</form>
		</div>
	</nav>
   
   

    <?php
    // // show the table (courses) which are available (data from DB)
    // $benutzer = "root";
    // $passwort = "";
    // $dbname = "Courses";
    // $link = mysqli_connect('localhost', $benutzer, $passwort, $dbname);
    // mysqli_query($link, "SET NAMES 'utf8'"); //Umlaute richtig darstellen
    // $abfrage = "select * from adressen";
    // $result = mysqli_query($link, $abfrage) or die(mysqli_error($link));
    // //Tabellenkopf darstellen
    // echo "<table border = \"1\">";
    // $anzahl_spalten = mysqli_num_fields($result);
    // echo "<tr>";
    // for ($i = 0; $i < $anzahl_spalten; $i++) {
    // $feldinfo = mysqli_fetch_field_direct($result, $i);
    // echo "<th>".$feldinfo->name."</th>";
    // }
    // echo "</tr>";
    // //Rest der Tabelle in einer Schleife darstellen
    // while ($zeile=mysqli_fetch_assoc($result)) /* As long as $result is answering */ {
    // echo "<tr>";
    // while (list($key, $value) = each($zeile)) {
    // echo "<td>".$value."</td>";
    // }
    // echo "</tr>";
    // }
    // echo "</table>";
    // mysqli_close($link);
    ?>

    <!-- jQuery (wird fÃ¼r Bootstrap JavaScript-Plugins benÃ¶tigt) -->
	<script
		src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<!-- Binde alle kompilierten Plugins zusammen ein (wie hier unten) oder such dir einzelne Dateien nach Bedarf aus -->
	<script src="../js/bootstrap.min.js"></script>
</body>

</html>