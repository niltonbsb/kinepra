<form name="formulario_cambiar_contrasena" action="cambiar_contrasena_admin.php" method="POST">
<table align="center">
<tr>
<td>Contrasena actual:</td> <td><input type="text" name="contrasena_actual" id="contrasena_actual"/></td>
</tr>
<tr>
<td>Contrasena Nueva:</td> <td><input type="text" name="contrasena_nueva" id="contrasena_nueva"/></td>
</tr>
<tr>
<td>Repita Contrasena Nueva:</td> <td><input type="text" name="re_contrasena_nueva" id="re_contrasena_nueva"/></td>
</tr>
</table>
<center><input type="submit" value="ingresar" onclick="return validar_modificar_contrasena()"/></center>
</form>

