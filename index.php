<!--  Initialize all needed, Homepage is shown on home.php  -->

<?php

// header("location:view/home.php");

$num = 1;

if ($num == 1) {
    run();
}

function run() {
    header("location:view/home.php");
}

?>
