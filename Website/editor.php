<!DOCTYPE html>

<html>
	<meta charset="UTF-8">
	
	<head>
	<?php 
	?>$
	</head>
	
	<body>
            
         <?php
         
        
        include "db.inc.php";
        $link = mysqli_connect('localhost', $benutzer, $passwort, $dbname);
        mysqli_select_db($link, $dbname);
        mysqli_query($link, "SET NAMES 'utf8'"); //Umlaute richtig darstellen
        
        $abfrage = "select * from users";    
        $result = mysqli_query($link, $abfrage) or die(mysqli_error($link));
        
        //Tabellenkopf darstellen
        echo "<table border = \"1\">";
        $anzahl_spalten = mysqli_num_fields($result);
        echo "<tr>";
        for ($i = 0; $i < $anzahl_spalten; $i++) {
            $feldinfo = mysqli_fetch_field_direct($result, $i);
            echo "<th>".$feldinfo->name."</th>";
        }
        echo "</tr>";
        
        //Rest der Tabelle in einer Schleife darstellen
        while ($zeile=mysqli_fetch_assoc($result)) /* As long as $result is answering */ {
            echo "<tr>";
            while (list($key, $value) = each($zeile)) {
                echo "<td>".$value."</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
        
        mysqli_close($link);
        ?>
    
	</body>
	
</html>