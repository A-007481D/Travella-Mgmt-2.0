<<<<<<< HEAD
<?php require_once '../config/dbconfig.php'; ?>
=======
<?php 
session_start();
session_unset();
session_destroy();
header("location: ../index.php");
?>
>>>>>>> 7add03f2776cbe3e35fe7f33f947d829aa205c73
