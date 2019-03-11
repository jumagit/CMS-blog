<?php session_start(); ?>
<?php

$_SESSION['Username'] = null;
$_SESSION['Password'] = null;
$_SESSION['Email'] = null;
$_SESSION['user_status'] = null;

header("Location:../index.php");

?>
