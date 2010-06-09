<html>
<head>
	<link rel="stylesheet" href="../css/estilos.css" type="text/css"/>
	<title>Sistema de Registro y Reservas de Pacientes</title>
	<script type="text/javascript" src="../script/prototype.lite.js"></script>
    <script type="text/javascript" src="../script/moo.ajax.js"></script>
    <script type="text/javascript">

function CargarFormulario1(){
  var postString = "";
  new ajax('crear_usuario.php', {postBody: postString, update: 'formulario'});
}
function CargarFormulario2(){
  var postString = "";
  new ajax('cambiar_contraseņa.php', {postBody: postString, update: 'formulario'}); 
}
</script>
</head>
<body>
<div class="principal">
	<div class="cabecera">
		<div class="logo_cabecera"></div>
	</div>
	<div class="navegacion">
	<a onclick="CargarFormulario1()">Crear Usuarios</a>
	<a onclick="CargarFormulario2()">Cambiar Contraseņa</a>
	<a href="#">Cambiar Administrador</a>
	<a href="../index.php">Cerrar Sesion</a>
	</div>
	<div class="contenedor" id="formulario">
	
	</div>
	<div class="pie">
		<div class="logo_pie"></div>
	</div>
</div>
</body>
</html>
