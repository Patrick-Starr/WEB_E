

<html>
    <head>
        <link rel = "stylesheet" href = "../CSS_Files/Intranet.css">
    </head>

    <body>
        
        <!--muss noch weiter bearbeitet werden, -> login daten auslesen aus der Datenbank-->
<!--         <?php 
        $username = $Post['E-Mail']; 
        $password = $Post['Password']; 
        
        $username = stripslashes($username); 
        $password = stripslashes($password); 
        $username = mysql_real_escape_string($username);
        $password = mysql_real_escape_string($password);
        
        
        include "db.inc.php";
        $link = mysqli_connect("localhost", $benutzer, $passwort, $dbname);
        mysqli_select_db($link, $dbname); 
        mysqli_query($link, "SET NAMES 'utf8'");
        
        $result = mysqli_query("select * from users where E-Mail = '$username' and Password = '$password'")
                    or die("Failed to query database ".mysqli_error());
        
        $row = mysqli_fetch_array($result); 
        if($row['E-Mail'] == $username && $row['Password'] == $password){
            echo 'Login sucess';
        }else{
            echo 'failt to login'; 
        }
      
          ?> -->
        
        
        <!--Oberer Navigationsbereich-->
        <header class="navigation">
            <p>
                <a href = "../Website/Index.php">Home</a>
            </p>
        </header>
        
        <!--/* Button for adding courses */--> 
        <form action="CreateNewModul.php">
            <button class ="kurshinzufügen"> Kurs hinzufügen</button>
        </form>
        
        <!--DatenBankGrundlagen-->
        <?php 
//        include "db.inc.php";
//        $link = mysqli_connect("localhost", $benutzer, $passwort, $dbname);
//        mysqli_select_db($link, $dbname); 
//        mysqli_query($link, "SET NAMES 'utf8'");
        
        $abfrage = "select * from courses"; 
        $result = mysqli_query($link, $abfrage) or die(mysqli_error($link)); 
        
        //Tabellenkopf darstellen 
        echo "<table border = \"1\">";
        $anzahl_spalten = mysqli_num_fields($result); 
        echo "<tr>";
        for($i = 0; $i < $anzahl_spalten; $i++){
            $feldinfo = mysqli_fetch_field_direct($result, $i); 
            echo "<th>".$feldinfo->name."</th>";
        }
        echo "</tr>";
        
        //Rest der Tabelle in einer Schleife darstellen
        while($zeile = mysqli_fetch_assoc($result)){
             echo "<tr>";
             while (list($key, $value) = each($zeile)){
                 echo "<td>".$value."</td>";
             }   
            echo "</tr>"; 
        }
        echo "</table>"; 
        
        mysqli_close($link); 
        ?> 
        
        
        
        
<!--        <h1>Ihre Kurse</h1>
        <ul style="list-style-type:square">
            <li>Kurs 1</li>
            <li>Kurs 2</li>
            <li>Kurs 2</li>
        </ul>  -->

    </body>

</html>