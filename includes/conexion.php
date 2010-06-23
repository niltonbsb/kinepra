<?
$servidor="localhost";
$usrlogin="root";
$clave="123";
$db="kinepra_db";

$conexion = mysql_connect($servidor,$usrlogin,$clave) or die ("ERROR EN CONECTAR A LA BASE DE DATOS.");

mysql_select_db($db,$conexion) or die("error al seleccionar la base de datos");

?>