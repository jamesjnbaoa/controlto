<?php
session_start();
date_default_timezone_set("America/Bogota" ) ; 
        $hora = date('h:i a',time() - 3600*date('I'));

if(!isset($_SESSION['k_username'])){

header("location:../index.php");
} else {

session_unset();
session_destroy();
header("location:../index.php");
}
?>
