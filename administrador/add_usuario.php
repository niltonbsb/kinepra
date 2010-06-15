<?php
include("../includes/conexion.php");
$nombre_usuario=$_POST['nombre_usuario'];
$direccion_usuario=$_POST['direccion_usuario'];
$fono=$_POST['fono_usuario'];
$login_usuario=$_POST['login_usuario'];
$contrasena_usuario=$_POST['contrasena_usuario'];
if($nombre_usuario!="" && $direccion_usuario!="" && $fono!="" && $login_usuario!="" && $contrasena_usuario!=""){
mysql_query("INSERT INTO usuarios (nombre_usuario, direccion_usuario, telefono_usuario, login_usuario, pass_usuario, estado)values('$nombre_usuario','$direccion_usuario','$fono','$login_usuario','$contrasena_usuario',1)");
}
header ("location:servcio_administrador.php");
?>