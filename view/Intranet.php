

<html>
    <head>
        <link rel = "stylesheet" href = "../CSS_Files/Intranet.css">
    </head>

    <body>
        
        <!--Oberer Navigationsbereich-->
        <header class="navigation">
            <p>
                <a href = "view/index.php">Home</a>
            </p>
        </header>
        
        <!--/* Button for adding courses */--> 
        <form action="CreateNewModul.php">
            <button class ="kurshinzufügen"> Kurs hinzufügen</button>
        </form>

       <!-- <!--DatenBankGrundlagen-->
        
        <?php 
        include '../DAO/CoursesDAO.php';
        //Tabellenkopf darstellen 
//         $result = Courses::readALL();
        $result = Courses::readSearched("FHNW", NULL, "", "");
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
        ?>

        
        
        
<!--        <h1>Ihre Kurse</h1>
        <ul style="list-style-type:square">
            <li>Kurs 1</li>
            <li>Kurs 2</li>
            <li>Kurs 2</li>
        </ul>  -->

    </body>

</html>