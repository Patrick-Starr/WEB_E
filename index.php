<!--  Initialize all needed, Homepage is shown on home.php  -->

<?php
header("location:view/home.php");

echo "before exit";

exit(self);

echo "after exit";

?>
