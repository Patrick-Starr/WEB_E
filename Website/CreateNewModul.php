<html> 
    <meta charset="UTF-8"> 
    <head>
    </head>
    
    <body>
    <?php

        

    if(!empty($_POST))
    {
  
     $feld1 = $_POST['CID'];
     $feld2 = $_POST['UID'];
     $feld3 = $_POST['Course'];
     $feld4 = $_POST['Link'];
     $feld5 = $_POST['Duration'];
     $feld6 = $_POST['Start'];
     $feld7 = $_POST['Form'];
     $feld8 = $_POST['Place'];
     $feld9 = $_POST['Created'];
     
    include "db.inc.php";
      
     
     $link = mysqli_connect('localhost', $benutzer, $passwort, $dbname);
     mysqli_select_db($link, $dbname);
     mysqli_query($link, "SET NAMES 'utf8'"); //Umlaute richtig darstellen
    
     $insert ="INSERT INTO `courses` (`CID`,`UID`,`Course`,`Link`,`Duration`,`Start`,`Form`,`Place`,`Created`) "
             . "VALUES('$feld1','$feld2','$feld3','$feld4','$feld5','$feld6','$feld7','$feld8','$feld9')";
  
     
     $db = mysqli_query($link, $insert) or die(mysqli_error($link));
         
     mysqli_close($link);
       
     echo "<h3> Ihre Daten wurden in unsere Tabelle \"user\" aufgenommen</h3>";
       
     
    }
  
    ?> 
    
        
        
        
        
        <h3>Modul Einfügen</h3>
        <div id="table"> 
        
            <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post"> 
                <table class="modulForm"> 
                     <tr> 
                        <td height="45">CID</td> 
                        <td height="45"><input type="integer" name="CID" size="50"/></td> 
                    </tr>
                     <tr> 
                        <td height="45">UID</td> 
                        <td height="45"><input type="integer" name="UID" size="50"/></td> 
                    </tr>
                    <tr> 
                        <td height="45">Modul</td> 
                        <td height="45"><input type="text" name="Course" size="50"/></td> 
                    </tr>
                     <tr> 
                        <td height="45">Link</td> 
                        <td height="45"><input type= "text" name="Link" size="50"/></td> 
                     </tr>
                     <tr> 
                        <td height="45">Dauer</td> 
                        <td height="45"><input type="integer" name="Duration" size="50"/></td> 
                     </tr>
                     <tr> 
                        <td height="45">Startdatum</td> 
                        <td height="45"><input type= "date" name="Start" value="2018-07-22" min="1900-01-01" max="3000-12-31" size="50"/></td> 
                     </tr>
                     <tr> 
                        <td height="45">Form</td> 
                        <td height="45"><input type="text" name="Form" size="50"/></td> 
                    </tr>
                     <tr> 
                        <td height="45">Place</td> 
                        <td height="45"><input type="text" name="Place" size="50"/></td> 
                    </tr>
                     <tr> 
                        <td height="45">Created</td> 
                        <td height="45"><input type= "date" name="Created" value="2018-07-22" min="1900-01-01" max="3000-12-31" size="50"/></td> 
                     </tr>
                </table>   
                <input type="Submit" name="OK" value="Senden" onclick="registrieren()"/>
            </form> 
            <form action="Intranet.php" >
            <button>Intranet</button>
            </form>
        </div>


        
        <script>
            $("%datepicker").datepicker({ });
            
            function registrieren(){
                alert("Ihr Modul wird registriert"); 
            }
          </script> 
        
        
    </body> 
</html>