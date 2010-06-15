<?php
include("../includes/conexion.php");
$contrasena_actual=$_POST['contrasena_actual'];
$contrasena_nueva=$_POST['contrasena_nueva'];
$re_contrasena_nueva=$_POST['re_contrasena_nueva'];
if($contrasena_actual!="" && $contrasena_nueva!="" && $re_contrasena_nueva!="" && $contrasena_nueva==$re_contrasena_nueva){
mysql_query("UPDATE administrador SET pass_admin='$contrasena_nueva' WHERE estado=1");
}
header("location:servcio_administrador.php");
?>