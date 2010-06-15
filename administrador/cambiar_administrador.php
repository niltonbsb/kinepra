<form name="formulario_administrador" action="cambiar_administrador_nuevo.php" method="POST">
<table align="center">
<tr>
<td> Nombre Nuevo Administrador:</td> <td><input type="text" name="nombre_administrador" id="nombre_administrador"/></td>
</tr>
<tr>
<td>Login:</td> <td><input type="text" name="login_administrador" id="login_administrador"/></td>
</tr>
<tr>
<td>Contrasena:</td> <td><input type="text" name="contrasena_administrador" id="contrasena_administrador"/></td>
</tr>
</table>
<center><input type="submit" value="ingresar" onclick="return validar_modificar_administrador()"/></center>
</form>
