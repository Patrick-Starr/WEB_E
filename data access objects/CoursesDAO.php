<!-- Use CRUD - create read update delete  -->

<!-- Code fragments used from https://www.startutorial.com/articles/view/php-crud-tutorial-part-1 -->

<?php
namespace dao; 

    public function create(Courses $cours){
        $stmt = $this ->pdoInstance ->prepate(' INSERT INTO courses
        (CID, UID, Course, Link, Duration, Start, Form Place, Created'); 
        //test
    }
    
    
    
    
?>
    
}
