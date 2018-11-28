

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
        
//         Courses::create(2, "SOJO", "www.fhnw.ch", 2, "2018-02-01" , "VZ", "Olten");
//         $result = Courses::readSearched("FHNW", NULL, "", "");
//         $result = Courses::readMy(2);
//         Courses::update(/*CID*/ 41, "FHNW Schulseite", "https://www.fhnw.ch/de/startseite", null, null, null, null); /* Null if it should not be overwritten */
//         Courses::delete(/*CID*/39); /*param = int*/
        $result = Courses::readALL();
        
        if(isset($result)) {
            
            
        echo "<table border = \"1\">";
        $anzahl_spalten = mysqli_num_fields($result); 
        echo "<tr>";
        for($i = 0; $i < $anzahl_spalten; $i++){
            $feldinfo = mysqli_fetch_field_direct($result, $i); 
            echo "<th>".$feldinfo->name."</th>";
        }
        echo "</tr>";
        //Rest der Tabelle in einer Schleife darstellen
        
        $aa = 0;
        while($zeile = mysqli_fetch_assoc($result)){
             echo "<tr>";
             while (list($key, $value) = each($zeile)){
                 
                 if ($key === 'Link') {
                     echo "<td> <a href=".$value."> Link zum Kurs </a> </td>";
                 } else {
                     echo "<td>".$value."</td>";
                 }
             }   
            echo "</tr>";
        }
        echo "</table>";

        $result = null;
        }
        ?>

        
        
        
<!--        <h1>Ihre Kurse</h1>
        <ul style="list-style-type:square">
            <li>Kurs 1</li>
            <li>Kurs 2</li>
            <li>Kurs 2</li>
        </ul>  -->

    </body>

</html>