<html> 
    <meta charset="UTF-8"> 
    <head>
    </head>
    
    
    
    
    <body>
        
        <h3>Modul Einfügen</h3>
        <div id="table"> 
        
            <form> 
                <table class="modulForm"> 
                    <tr> 
                        <td height="45">Modul</td> 
                        <td height="45"><input type="Modul" name="Modul" size="50"/></td> 
                    </tr>
                     <tr> 
                        <td height="45">Startdatum</td> 
                        <td height="45"><input type= "date" value="2018-07-22" min="2018-01-01" max="2018-12-31" size="50"/></td> 
                     </tr>
                     <tr> 
                        <td height="45">Dauer</td> 
                        <td height="45"><input type="dauer" name="dauer" size="50"/></td> 
                     </tr>
                     <tr> 
                        <td height="45">Vorraussetzung</td> 
                        <td height="45"><input type="vorraussetzung" name="vorrausetzung" size="50"/></td> 
                    </tr>
                     <tr> 
                        <td height="45">Beschreibung</td> 
                        <td height="45"><input type="beschreibung" name="besschribung" size="50"/></td> 
                    </tr>
                     <tr> 
                        <td height="45">Studiengang Leiter</td> 
                        <td height="45"><input type="leiter" name="leiter" size="50"/></td> 
                    </tr>
                </table>   
            </form> 
        
        
        
        </div>
        
        <script>
            $("%datepicker").datepicker({ });
          </script> 
        
        
    </body> 
</html>