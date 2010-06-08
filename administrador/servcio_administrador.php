<html>
<head>
	<link rel="stylesheet" href="../css/estilos.css" type="text/css"/>
	<title>Sistema de Registro y Reservas de Pacientes</title>
</head>
<body>
<div class="principal">
	<div class="cabecera">
		<div class="logo_cabecera"></div>
	</div>
	<div class="navegacion">
	<a href="administrador.php">ADMINISTRADOR</a>
	<a href="#">USUARIO</a>
	</div>
	<div class="contenedor">
	
	<label>Seleccione el tipo de Historia Clincia:</label>
			<form name="form_hisotria_clinica" action="#" method="">
					<select id="tipo_historia" name="tipo_historia">
                		<option value="">Seleccione</option>
                		<option value="">Historia clinica uno</option>
                		<option value="">Historia clinica dos</option>
                		<option value="">Historia clinica tres</option>
            		</select>
            		<input type="submit" value="Aceptar" class="Button" onclick="return validar_admin()"/>
            </form>	
	</div>
	<div class="pie">
		<div class="logo_pie"></div>
	</div>
</div>
</body>
</html>
