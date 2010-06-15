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