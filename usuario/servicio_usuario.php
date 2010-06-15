<html>
<head>
	<link rel="stylesheet" href="../css/estilos.css" type="text/css"/>
	<title>Sistema de Registro y Reservas de Pacientes</title>
	<script type="text/javascript" src="../script/prototype.lite.js"></script>
    <script type="text/javascript" src="../script/moo.ajax.js"></script>
    <script type="text/javascript">

function CargarFormulario1(){
  var postString = "";
  new ajax('seleccion_ficha.php', {postBody: postString, update: 'formulario'});
}
function CargarFormulario2(){
  var postString = "";
  new ajax('buscar_paciente.php', {postBody: postString, update: 'formulario'});
}

</script>
    
</head>
<body>
<div class="principal">
	<div class="cabecera">
		<div class="logo_cabecera"></div>
	</div>
	<div class="navegacion">
	<a onclick="CargarFormulario1()">Registro de Pacientes</a>
	<a onclick="CargarFormulario2()">Buscar Pacientes</a>
	<a>Reservar Pacientes</a>
	<a href="../index.php">Cerrar Sesion</a>
	<?
		$id_usuario=$_GET['id_usuario'];
		include("../includes/conexion.php");
	$valor=mysql_query("SELECT * FROM usuarios WHERE id_usuario=$id_usuario");
	$valor1=mysql_fetch_array($valor);
	 $nombre_usuario=$valor1['nombre_usuario'];
	 echo("$nombre_usuario");
		
	?>
	</div>
	
	<div class="contenedor" id="formulario" >
		
    </div>
	<div class="pie">
		<div class="logo_pie"></div>
	</div>
</div>
</body>
</html>
