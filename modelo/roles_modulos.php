<?php
include('conexioni.php');
session_start();
//roles de parte administrativo
$query_roles = mysqli_query($con,"select modulo, acceso FROM roles where id_plan= '".$_SESSION['plan']."' ");
$modulo[] = '';
$acces[] = '';
while($p = mysqli_fetch_array($query_roles)){
	$modulo[] = $p[0];
	$acces[] = $p[1];
}

//roles de usuarios
$query_roles_user = mysqli_query($con,"select modulo, acceso FROM roles_user where id_user= '".$_SESSION["id_user"]."' ");
$modulo_user[] = '';
$acces_user[] = '';
while($rr = mysqli_fetch_array($query_roles_user)){
	$modulo_user[] = $rr[0];
	$acces_user[] = $rr[1];
}