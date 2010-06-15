<?php
/**
 * @author CD5908132BA8530530530530530ED0ED0ED0BD0BD0FD07D08300600C0180
 * @copyright 2010
 */
 include("includes/conexion.php");
$login_usuario=$_POST['login_usuario'];
$pass_usuario=$_POST['pass_usuario'];

$aux=mysql_query("select * from usuarios where login_usuario = '$login_usuario' and pass_usuario = '$pass_usuario' and estado=1" ,$conexion);
if($login=mysql_fetch_array($aux)){
	$_SESSION['usuarios']=$usuarios;
	$id=$login['id_usuario'];

header( "Location: usuario/servicio_usuario.php?id_usuario=$id" );
}
else{
	?><script>
	alert('El usuario no existe. Verifique su Login o Password');
location.href= "usuario.php";
	</script>
<?}?>