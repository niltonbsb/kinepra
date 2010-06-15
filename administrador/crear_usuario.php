<<<<<<< HEAD
<form name="formulario_usuario"  action="add_usuario.php" method="POST">
<table align="center">
<tr>
	<td>Nombre Completo:</td> <td><input type="text" name="nombre_usuario" id="nombre_usuario"/><td>
</tr>
<tr>
	<td>Direccion:</td> <td><input type="text" name="direccion_usuario" id="direccion_usuario"/></td>
</tr>
<tr>
	<td>Telefono:</td> <td><input type="text" name="fono_usuario" id="fono_usuario"/></td>
</tr>
<tr>
	<td>Login:</td> <td><input type="text" name="login_usuario" id="login_usuario"/></td>
</tr>
<tr>
	<td>Contrasena:</td> <td><input type="text" name="contrasena_usuario" id="contrasena_usuario"/></td>
</tr>
</table>
<center><input type="submit" value="ingresar" onclick="return validar_crear_usuario()"/></center>
</form>
=======
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
	<td>Telefono:</td> <td><input type="text" name="fono_usuario" id="fono_usuario"/></td>
</tr>
<tr>
	<td>Login:</td> <td><input type="text" name="login_usuario" id="login_usuario"/></td>
</tr>
<tr>
	<td>Contraseña:</td> <td><input type="text" name="contraseña_usuario" id="contraseña_usuario"/></td>
</tr>
</table>
<center><input type="submit" value="ingresar"/></center>
</form>
<?php
$nombre_usuario=$_GET['nombre_usuario'];
$direccion_usuario=$_GET['direccion_usuario'];
$fono=$_GET['fono_usuario'];
$login_usuario=$_GET['login_usuario'];
$contraseña_usuario=$_GET['contraseña_usuario'];
if($nombre_usuario!="" && $direccion_usuario!="" && $fono!="" && $login_usuario!="" && $contraseña_usuario!=""){
mysql_query ("INSERT INTO usuarios (nombre_usuario, direccion_usuario, telefono_usuario, login_usuario, pass_usuario, estado)values('$nombre_usuario','$direccion_usuario','$fono','$login_usuario','$contraseña_usuario',1)");
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
			   <td><a href="eliminar_usuario.php?codigo=<?echo("$numero");?>"><center><img title="Eliminar Usuario" src="../images/delete.gif"/></center></a></td>
			   </tr>
				<?}?>
			</table>
>>>>>>> 8538e65a76199fd513564def51f54d3323b31732
