<<<<<<< HEAD
<html>
<head>
	<link rel="stylesheet" href="../css/estilos.css" type="text/css"/>
	<title>Sistema de Registro y Reservas de Pacientes</title>
	<script type="text/javascript" src="../script/prototype.lite.js"></script>
    <script type="text/javascript" src="../script/moo.ajax.js"></script>
    <script type="text/javascript" src="../script/validar_formulario.js"></script>
    <script type="text/javascript">

function CargarFormulario1(){
  var postString = "";
  new ajax('crear_usuario.php', {postBody: postString, update: 'formulario'});
}
function CargarFormulario2(){
  var postString = "";
  new ajax('cambiar_contraseña.php', {postBody: postString, update: 'formulario'}); 
}
function CargarFormulario3(){
  var postString = "";
  new ajax('cambiar_administrador.php', {postBody: postString, update: 'formulario'}); 
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
	<a onclick="CargarFormulario2()">Cambiar Contraseña</a>
	<a onclick="CargarFormulario3()">Cambiar Administrador</a>
	<a href="../index.php">Cerrar Sesion</a>
	<? include("../includes/conexion.php");
	$valor=mysql_query("SELECT * FROM administrador WHERE estado=1");
	$valor1=mysql_fetch_array($valor);
	 $nombre_admin=$valor1['login_admin'];
	 echo("$nombre_admin");
	?>
	</div>
	
	<div class="contenedor" id="formulario" >
		

<table align="center" border="1">
				<tr><td>Nro</td><td>Nombre</td><td>Direccion</td><td>Telefono</td><td>Login</td><td>Password</td><td>Bloquear</td><td>Eliminar</td></tr>
			<? include("../includes/conexion.php");
			    $aux=mysql_query("SELECT * FROM usuarios WHERE estado=1");
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
        </div>
	<div class="pie">
		<div class="logo_pie"></div>
	</div>
</div>
</body>
</html>
=======
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
  new ajax('cambiar_contraseña.php', {postBody: postString, update: 'formulario'}); 
}
function CargarFormulario3(){
  var postString = "";
  new ajax('cambiar_administrador.php', {postBody: postString, update: 'formulario'}); 
}
</script>
</head>
<body>
<div class="principal">
	<div class="cabecera">
		<div class="logo_cabecera"></div>
	</div>
	<div class="navegacion">
	<a onclick="CargarFormulario1()">Usuarios</a>
	<a onclick="CargarFormulario2()">Cambiar Contraseña</a>
	<a onclick="CargarFormulario3()">Cambiar Administrador</a>
	<a href="../index.php">Cerrar Sesion</a>
	</div>
	<div class="contenedor" >
			elija las opciones de administrador
		<div id="formulario"></div>
	</div>
	<div class="pie">
		<div class="logo_pie"></div>
	</div>
</div>
</body>
</html>
>>>>>>> 8538e65a76199fd513564def51f54d3323b31732
