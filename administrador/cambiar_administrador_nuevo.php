<?php
include("../includes/conexion.php");
$nombre_administrador=$_POST['nombre_administrador'];
$login_administrador=$_POST['login_administrador'];
$contrasena_administrador=$_POST['contrasena_administrador'];
if($nombre_administrador!="" && $login_administrador!="" && $contrasena_administrador!=""){
mysql_query("UPDATE administrador SET nombre_administrador='$nombre_administrador', login_admin ='$login_administrador', pass_admin='$contrasena_administrador' WHERE estado=1");
}
header("location:servcio_administrador.php");
?>
