<?php session_start(); ?>

<?php 
$_SESSION['username'] = '' ;
$_SESSION['firstname'] = '' ;
$_SESSION['lastname'] = '' ;
$_SESSION['user_role'] = '' ;
session_destroy();


header("Location: ../travello/index.php")
?>