<!-- Use CRUD - create read update delete  -->

<?php 


namespace dao; 

use domain\Courses; 


class CoursesDAO extends BasicDAO{
    
    public function create(Courses $cours){
        $stmt = $this ->pdoInstance ->prepate(' INSERT INTO courses
                (CID, UID, Course, Link, Duration, Start, Form Place, Created'); 
        
    }
    
    
}



?> 


<!-- Good help here! -->
<!-- https://www.startutorial.com/articles/view/php-crud-tutorial-part-1 -->