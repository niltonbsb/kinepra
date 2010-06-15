<html>
<head>
	<link rel="stylesheet" href="css/estilos.css" type="text/css"/>
	<title>Sistema de Registro y Reservas de Pacientes</title>
	<script type="text/javascript" src="script/validar_formulario.js"></script>
</head>
<body>
<div class="principal">
	<div class="cabecera">
		<div class="logo_cabecera"></div>
	</div>
	<div class="navegacion">
	<a href="index.php">INICIO</a>
	<a href="administrador.php">ADMINISTRADOR</a>
	</div>
	<div class="contenedor">
	<form name="form_usuario" action="validar_usuario.php" method="POST">
		<table align="center">
		USUARIO
		<tr>
			<td>Login:</td> <td><input type="text" name="login_usuario" id="login_usuario"/> </td>
		</tr>
		<tr>
			<td>Password:</td> <td><input type="password" name="pass_usuario" id="pass_usuario"/> </td>
		</tr>
			</table>
				<center><input type="submit" value="Aceptar" class="Button" onclick="return validar_usuario()"/></center>
			
		</form> 
	</div>
	<div class="pie">
		<div class="logo_pie"></div>
	</div>
</div>
</body>
</html>
