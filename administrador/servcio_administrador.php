<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Kineprax</title>
<link href="../style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<!-- topPan-->
<div id="topPan">
	<h1>Clients and Solutions</h1>
	<a href="index.html"><img src="../images/logo1.jpg" title="Technical Support" alt="Technical Support" width="372" height="91" border="0" /></a>
	<ul>
		<li><a href="administrador.php"><span>Inicio</span></a></li>
		<li><a href="#">Reservas</a></li>
		<li><a href="#">Pacientes</a></li>
		<li><a href="#">Buscar</a></li>
		<li class="contact"><a href="#" class="contact">Contact</a></li>
	</ul>
</div>
<!--topPan close-->
<!--bobyPan -->
<div id="bodyPan">

  <!--rightPan -->
  <div id="rightPan">
  <link rel="stylesheet" href="../css/estilos.css" type="text/css"/>
	
	
</head>
<body>
<div class="principal">
	
	<div class="navegacion">
	<a href= "javascript:CargarFormulario1()">Usuarios</a>
	<a href= "javascript:CargarFormulario2()">Cambiar Contraseña</a>
	<a href= "javascript:CargarFormulario3()">Cambiar Administrador</a>
	<a href="../index.html">Cerrar Sesion</a>
	</div>
	<div class="contenedor">Elija las opciones de administrador
	<div id="formulario"></div>
	</div>
	
</div>
  </div>
</div>
<!--bodyPan close -->
<!--mainfooter body-->
<div id="mainfooterbody">
  <div id="footerPan">
  	<div id="footerPanleft">
    <a href="index.html"><img src="../images/logo2.jpg" title="Technical Support" alt="Technical Support" width="260" height="35" border="0" /></a></div>
	<ul>
  <li><a href="administrador.php">Inicio </a>| </li>
  <li><a href="#">Reservas</a> | </li>
  <li><a href="#">Pacientes </a>| </li>
  <li><a href="#">Buscar</a> | </li>
  <li><a href="#">Contact </a> </li>
  </ul>	
  <p>© Todos los derechos reservados</p>
  <ul class="templateworld">
  	<li>Design By:</li>
	<li><a href="http://www.templateworld.com" target="_blank">Mauricio Jaldin</a></li>
  </ul>
	</div>
</div>
</body>
</html>

<script type="text/javascript" src="../script/prototype.lite.js"></script>
<script type="text/javascript" src="../script/moo.ajax.js"></script>
<script type="text/javascript">

function CargarFormulario1(){
  var postString = "";
  new ajax('crear_usuario.php', {postBody: postString, update: 'formulario'});
}
function CargarFormulario2(){
  var postString = "";
  new ajax('cambia.php', {postBody: postString, update: 'formulario'}); 
}
function CargarFormulario3(){
  var postString = "";
  new ajax('cambiar_administrador.php', {postBody: postString, update: 'formulario'}); 
}
</script>

	

