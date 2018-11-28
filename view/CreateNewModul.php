<html>
<meta charset="UTF-8">
<head>
</head>

<body>

<?php

include '../DAO/CoursesDAO.php';

if ( !empty($_POST)) {
    // keep track validation errors

    $CourseError = null;
    $LinkError = null;
    $DurationError = null;
    $StartError = null;
    $FormError = null;
    $PlaceError = null;

    // keep track post values

    $Course = $_POST['Course'];
    $Link = $_POST['Link'];
    $Duration = $_POST['Duration'];
    $Start = $_POST['Start'];
    $Form = $_POST['Form'];
    $Place = $_POST['Place'];


    // validate input
    $valid = true;

    //Überprüfung Feld: Course
    if (empty($Course)) {
        $CourseError = 'Please enter Course<br/>';
        echo $CourseError;
        $valid = false;
    }
    // Überprüfung Feld: Link
    if (empty($Link)) {
        $LinkError = 'Please enter Link<br/>';
        echo $LinkError;
        $valid = false;

        }
    else if ( !filter_var($Link,FILTER_VALIDATE_URL) ) {
        echo  'Please enter a valid Link<br/>';
        $valid = false;
    }

    //Überprüfung Feld: Duration
    if (empty($Duration)) {
        $DurationError = 'Please enter Duration<br/>';
        echo $DurationError;
        $valid = false;

    }else if ( !filter_var($Duration,FILTER_VALIDATE_INT) ) {
        echo  'Please enter a valid Number<br/>';
        $valid = false;
    }
    //Überprüfung Feld: Form
    if (empty($Form)) {
        $FormError = 'Please enter VZ or TZ<br/>';
        echo $FormError;
        $valid = false;

    }
    //Überprüfung Feld: Place
    if (empty($Place)) {
        $PlaceError = 'Please enter a Place<br/>';
        echo $PlaceError;
        $valid = false;

    }
    // insert data
    if ($valid) {
        Courses::create(2, $Course, $Link, $Duration, $Start, $Form, $Place);
    }

}


?>



<h3>Modul Einfügen</h3>
<div id="table">

    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
        <table class="modulForm">
            <tr>
                <td height="45">Modul</td>
                <td height="45"><input type="text" name="Course" size="50" /></td>
            </tr>
            <tr>
                <td height="45">Link</td>
                <td height="45"><input type="text" name="Link" size="50" /></td>
            </tr>
            <tr>
                <td height="45">Semester</td>
                <td height="45"><input type="integer" name="Duration" size="50" /></td>
            </tr>
            <tr>
                <td height="45">Startdatum</td>
                <td height="45"><input type="date" name="Start"
                                       min="1900-01-01" max="3000-12-31" size="50" /></td>
            </tr>
            <tr>
                <td height="45">VZ/TZ</td>
                <td height="45"><input type="text" name="Form" size="50" /></td>
            </tr>
            <tr>
                <td height="45">Ort</td>
                <td height="45"><input type="text" name="Place" size="50" /></td>
            </tr>

        </table>
        <input type="Submit" name="OK" value="Senden"
               onclick="registrieren()" />
               
    </form>
    <form action="../Intranet.php">
        <button>Intranet</button>
    </form>
</div>

<script>
    $("datepicker").datepicker({ });

    function registrieren(){
        alert("Ihr Modul wird registriert");
    }
</script>


</body>
</html>
