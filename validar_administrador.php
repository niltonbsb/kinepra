<?php
/**
 * @author CD5908132BA8530530530530530ED0ED0ED0BD0BD0FD07D08300600C0180
 * @copyright 2010
 */
 include("includes/conexion.php");
$login_admin=$_POST['login_admin'];
$pass_admin=$_POST['pass_admin'];

$aux=mysql_query("select * from administrador where login_admin = '$login_admin' and pass_admin = '$pass_admin' and estado=1" ,$conexion);
if($login=mysql_fetch_array($aux)){
	$_SESSION['administrador']=$administrador;

header( "Location: administrador/servcio_administrador.php" );
}
else{
	?><script>
	alert('El usuario no existe. Verifique su Login o Password');
location.href= "administrador.php";
	</script>
<?}?>