<? 
include("../includes/conexion.php");
?>
<form name="formulario_usuario" action="" method="GET" >
<table align="center">
<tr>
	<td>Nombre Completo:</td> <td><input type="text" name="nombre_usuario" id="nombre_usuario"/><td>
</tr>
<tr>
	<td>Direccion:</td> <td><input type="text" name="direccion_usuario" id="direccion_usuario"/></td>
</tr>
<tr>
	<td>Telefono:</td> 
	<td><input type="text" name="fono_usuario" id="fono_usuario"/></td>
</tr>
<tr>
	<td>Login:</td> <td><input type="text" name="login_usuario" id="login_usuario"/></td>
</tr>
<tr>
	<td>Contraseņa:</td> <td><input type="text" name="contraseņa_usuario" id="contraseņa_usuario"/></td>
</tr>
</table>
<center><input type="submit" value="ingresar"/></center>
</form>
<?php
$nombre_usuario=$_GET['nombre_usuario'];
$direccion_usuario=$_GET['direccion_usuario'];
$fono=$_GET['fono_usuario'];
$login_usuario=$_GET['login_usuario'];
$contraseņa_usuario=$_GET['contraseņa_usuario'];
if($nombre_usuario!="" && $direccion_usuario!="" && $fono!="" && $login_usuario!="" && $contraseņa_usuario!=""){
mysql_query ("INSERT INTO usuarios (nombre_usuario, direccion_usuario, telefono_usuario, login_usuario, pass_usuario, estado)values('$nombre_usuario','$direccion_usuario','$fono','$login_usuario','$contraseņa_usuario',1)");
}
?>

<table align="center" border="1">
				<tr><td>Nro</td><td>Nombre</td><td>Direccion</td><td>Telefono</td><td>Login</td><td>Password</td><td>Bloquear</td><td>Eliminar</td></tr>
			<? $aux=mysql_query("SELECT * FROM usuarios WHERE estado=1");
			   while($aux1=mysql_fetch_array($aux)){
			   	$numero=$aux1['id_usuario'];
			   	$nombre=$aux1['nombre_usuario'];
			   	$direccion=$aux1['direccion_usuario'];
			   	$telefono=$aux1['telefono_usuario'];
			    $login=$aux1['login_usuario'];
			    $pass=$aux1['pass_usuario'];?>
			   
			   	<tr class="fila">
			   <td><?echo("$numero");?></td>
			   <td><?echo("$nombre");?></td>
			   <td><?echo("$direccion");?></td>
			   <td><?echo("$telefono");?></td>
			   <td><?echo("$login");?></td>
			   <td><?echo("$pass");?></td>
			   <td align="center"><input  type="checkbox" name="habilitar" id="habilitar"/></td>
			   <td><img title="Eliminar Usuario" src="../images/Eliminar.gif"/></td>
			   </tr>
				<?}?>
			</table>