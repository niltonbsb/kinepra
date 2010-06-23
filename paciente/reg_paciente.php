<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
</head>

<body>
<? 
include("../includes/conexion.php");
?>
<form name="formulario_paciente" action="" method="GET" >
<table align="center">
<h1>1. FILIACION</h1>
<tr>
	<td>Nombre:</td> <td><input type="text" name="nombre_usuario" id="nombre_usuario"/><td>
</tr>
<tr>
	<td>Apellidos:</td> <td><input type="text" name="direccion_usuario" id="direccion_usuario"/></td>
</tr>
<tr>
	<td>Edad:</td> 
	<td><input type="text" name="fono_usuario" id="fono_usuario"/></td>
</tr>
<tr>
	<td>Sexo:</td> <td><input type="text" name="login_usuario" id="login_usuario"/></td>
</tr>
<tr>
	<td>Estado civil:</td> <td><input type="text" name="contraseña_usuario" id="contraseña_usuario"/></td>
</tr>
<tr>
	<td>Direccion:</td> <td><input type="text" name="nombre_usuario" id="nombre_usuario"/><td>
</tr>
<tr>
	<td>Telefono:</td> <td><input type="text" name="direccion_usuario" id="direccion_usuario"/></td>
</tr>
<tr>
<tr>
	<td>Fecha de primera consulta:</td> <td><input type="text" name="nombre_usuario" id="nombre_usuario"/><td>
</tr>
<tr>
	<td>Fuente de informacion:</td> <td><input type="text" name="direccion_usuario" id="direccion_usuario"/></td>
</tr>
</table>

<table align="center">
<h1>2. MOTIVO DE CONSULTA</h1>
<tr>
	<td>Descripcion</td> <td><textarea name="descrip" id="textarea" cols="60" rows="5" ><?=$descrip?></textarea></td>
</tr>
</table>

<table align="center">
<h1>3. CUADRO ACTUAL</h1>
<tr>
	<td>Tiempo de evolucion:</td> <td><input type="text" name="direccion_usuario"  size="60" id="direccion_usuario"/></td>
</tr>
<tr>
	<td>Caracteristicas del inicio:</td> <td><input type="text" name="direccion_usuario"  size="60" id="direccion_usuario"/></td>
</tr>
<tr>
	<td>Dolor:</td> <td><input type="text" name="direccion_usuario"  size="60" id="direccion_usuario"/></td>
</tr>
<tr>
	<td>Sintomas asociados:</td> <td><input type="text" name="direccion_usuario"  size="60" id="direccion_usuario"/></td>
</tr>
<tr>
	<td>Compromiso de las AVD:</td> <td><input type="text" name="direccion_usuario"  size="60" id="direccion_usuario"/></td>
</tr>
<tr>
	<td>Medicamentos:</td> <td><input type="text" name="direccion_usuario"  size="60" id="direccion_usuario"/></td>
</tr>
</table>

<table align="center">
<h1>4. DIAGNOSTICO MEDICO</h1>
<tr>
	<td>Descripcion:</td> <td><textarea name="descrip" id="textarea" cols="60" rows="5" ><?=$descrip?></textarea></td>
</tr>
</table>

<table align="center">
<h1>5. ANTECEDENTES</h1>
<tr>
	<td>Antecentes personales no patologicos:</td> <td><input type="text" name="direccion_usuario"  size="60" id="direccion_usuario"/></td>
</tr>
<tr>
	<td>Antecentes personales patologicos:</td> <td><input type="text" name="direccion_usuario"  size="60" id="direccion_usuario"/></td>
</tr>
<tr>
	<td>Antecentes familiares no patologicos:</td> <td><input type="text" name="direccion_usuario"  size="60" id="direccion_usuario"/></td>
</tr>
<tr>
	<td>Antecentes familiares patologicos:</td> <td><input type="text" name="direccion_usuario"  size="60" id="direccion_usuario"/></td>
</tr>
</table>

<table align="center">
<h1>6. EXAMEN FISICO</h1>
<h1>6.1 Signos Vitales</h1>
<tr>
	<td>Pulso:</td> <td><input type="text" name="direccion_usuario" id="direccion_usuario"/></td>
	<td>FR:</td> <td><input type="text" name="direccion_usuario" id="direccion_usuario"/></td>
	<td>PA:</td> <td><input type="text" name="direccion_usuario" id="direccion_usuario"/></td>
</tr>
	<td>Talla:</td> <td><input type="text" name="direccion_usuario" id="direccion_usuario"/></td>
	<td>Peso:</td> <td><input type="text" name="direccion_usuario" id="direccion_usuario"/></td>
	<td>Temp:</td> <td><input type="text" name="direccion_usuario" id="direccion_usuario"/></td>
</tr>
</table>

<table align="center">
<h1>6.2 Inspeccion</h1>
<tr>
	<td>Postura antialgica:</td> <td><textarea name="descrip" id="textarea" cols="60" rows="5" ><?=$descrip?></textarea></td>
</tr>
</table>

<table align="center" border="1">
<h1>6.3 Palpacion</h1>
<h1>6.3.1 Dolor</h1>
<h1>Escala analogica del dolor</h1>

<tr><td>1</td><td>2</td><td>3</td><td>4</td><td>5</td><td>6</td><td>7</td><td>8</td><td>9</td><td>10</td></tr>
<tr>
<td align="center"><input  type="checkbox" name="habilitar" id="habilitar"/></td>
<td align="center"><input  type="checkbox" name="habilitar" id="habilitar"/></td>
<td align="center"><input  type="checkbox" name="habilitar" id="habilitar"/></td>
<td align="center"><input  type="checkbox" name="habilitar" id="habilitar"/></td>
<td align="center"><input  type="checkbox" name="habilitar" id="habilitar"/></td>
<td align="center"><input  type="checkbox" name="habilitar" id="habilitar"/></td>
<td align="center"><input  type="checkbox" name="habilitar" id="habilitar"/></td>
<td align="center"><input  type="checkbox" name="habilitar" id="habilitar"/></td>
<td align="center"><input  type="checkbox" name="habilitar" id="habilitar"/></td>
<td align="center"><input  type="checkbox" name="habilitar" id="habilitar"/></td>
</tr>
</table>


<table align="center" border="1">
<h1>Tipo de dolor</h1>

<tr><td>Tipos</td><td>Presente(P)</td><td>Ausente(A)</td></tr>
<tr><td>Punzante</td><td><input  type="checkbox" name="habilitar" id="habilitar"/></td><td><input  type="checkbox" name="habilitar" id="habilitar"/></td></tr>
<tr><td>Quemante</td><td><input  type="checkbox" name="habilitar" id="habilitar"/></td><td><input  type="checkbox" name="habilitar" id="habilitar"/></td></tr>
<tr><td>Urente</td><td><input  type="checkbox" name="habilitar" id="habilitar"/></td><td><input  type="checkbox" name="habilitar" id="habilitar"/></td></tr>
</table>


<table align="center" border="1">
<h1>Segun la localizacion del dolor</h1>

<tr><td></td><td>Si</td><td>No</td><td>Areas</td><td>Derecha</td><td>Izquierda</td></tr>
<tr><td>Localizada</td>
<td><input type="checkbox" name="habilitar" id="habilitar"/></td>
<td><input  type="checkbox" name="habilitar" id="habilitar"/></td>
<td><input type="checkbox" name="habilitar" id="habilitar"/></td>
<td><input type="checkbox" name="habilitar" id="habilitar"/></td>
<td><input type="checkbox" name="habilitar" id="habilitar"/></td>
</tr>
<tr><td>Irradiada</td>
<td><input type="checkbox" name="habilitar" id="habilitar"/></td>
<td><input  type="checkbox" name="habilitar" id="habilitar"/></td>
<td><input  type="checkbox" name="habilitar" id="habilitar"/></td>
<td><input  type="checkbox" name="habilitar" id="habilitar"/></td>
<td><input  type="checkbox" name="habilitar" id="habilitar"/></td>
</tr>
</table>

<table align="center" border="1">
<h1>6.3.2 Sensibilidad</h1>

<tr><td></td>Tipo<td>Presente(P)</td><td>Ausente(A)</td><td>Alterada</td></tr>
<tr><td>Tactil</td>
<td><input type="checkbox" name="habilitar" id="habilitar"/></td>
<td><input  type="checkbox" name="habilitar" id="habilitar"/></td>
<td><input type="checkbox" name="habilitar" id="habilitar"/></td>
</tr>
<tr><td>Termica</td>
<td><input type="checkbox" name="habilitar" id="habilitar"/></td>
<td><input type="checkbox" name="habilitar" id="habilitar"/></td>
<td><input type="checkbox" name="habilitar" id="habilitar"/></td>
</tr>
<tr><td>Dolorosa</td>
<td><input type="checkbox" name="habilitar" id="habilitar"/></td>
<td><input type="checkbox" name="habilitar" id="habilitar"/></td>
<td><input type="checkbox" name="habilitar" id="habilitar"/></td>
</tr>
</table>

<table align="center" border="1">
<h1>6.4 Percusion</h1>
<h1>6.4.1 Reflejos Osteontendinosos en miembros inferiores</h1>

<tr><td>MMII Der.</td><td>Hipo.</td><td>Normo.</td><td>Hiper.</td><td>MMII Izq.</td><td>Hipo.</td><td>Normo.</td><td>Hiper.</td></tr>
<tr><td>r. Rotuliano</td>
<td><input type="checkbox" name="habilitar" id="habilitar"/></td>
<td><input  type="checkbox" name="habilitar" id="habilitar"/></td>
<td><input type="checkbox" name="habilitar" id="habilitar"/></td>
<td></td>
<td><input type="checkbox" name="habilitar" id="habilitar"/></td>
<td><input type="checkbox" name="habilitar" id="habilitar"/></td>
<td><input type="checkbox" name="habilitar" id="habilitar"/></td>
</tr>
<tr><td>r. Aquileo</td>
<td><input type="checkbox" name="habilitar" id="habilitar"/></td>
<td><input  type="checkbox" name="habilitar" id="habilitar"/></td>
<td><input type="checkbox" name="habilitar" id="habilitar"/></td>
<td></td>
<td><input type="checkbox" name="habilitar" id="habilitar"/></td>
<td><input type="checkbox" name="habilitar" id="habilitar"/></td>
<td><input type="checkbox" name="habilitar" id="habilitar"/></td>
</tr>
</table>

<table align="center" border="1">
<h1>6.5 Estadios de hernia discal</h1>

<tr><td>Estadios</td><td>Estadio 1</td><td>Estadio 2</td><td>Estadio 3</td><td>Estadio 4</td></tr>
<tr><td>Positivo</td>
<td><input type="checkbox" name="habilitar" id="habilitar"/></td>
<td><input type="checkbox" name="habilitar" id="habilitar"/></td>
<td><input type="checkbox" name="habilitar" id="habilitar"/></td>
<td><input type="checkbox" name="habilitar" id="habilitar"/></td>
</tr>

<tr><td>Negativo</td>
<td><input type="checkbox" name="habilitar" id="habilitar"/></td>
<td><input type="checkbox" name="habilitar" id="habilitar"/></td>
<td><input type="checkbox" name="habilitar" id="habilitar"/></td>
<td><input type="checkbox" name="habilitar" id="habilitar"/></td>
</tr>

<tr><td>Niveles de Afectacion</td>
<td><input type="checkbox" name="habilitar" id="habilitar"/></td>
<td><input type="checkbox" name="habilitar" id="habilitar"/></td>
<td><input type="checkbox" name="habilitar" id="habilitar"/></td>
<td><input type="checkbox" name="habilitar" id="habilitar"/></td>
</tr>
</table>


<table align="center">
<h1>7. DIAGNOSTICO FISIOTERAPEUTICO KINESIOLOGICO</h1>
<tr>
	<td>Descripcion:</td> <td><textarea name="descrip" id="textarea" cols="60" rows="5" ><?=$descrip?></textarea></td>
</tr>
</table>

<table align="center">
<h1>8. OBJETIVOS DE TRATAMIENTO</h1>
<tr>
	<td>Descripcion:</td> <td><textarea name="descrip" id="textarea" cols="60" rows="5" ><?=$descrip?></textarea></td>
</tr>
</table>

<table align="center">
<h1>9. ESQUEMA DE TRATAMIENTO</h1>
<tr>
	<td>Descripcion:</td> <td><textarea name="descrip" id="textarea" cols="60" rows="5" ><?=$descrip?></textarea></td>
</tr>
</table>

<table align="center">
<h1>10. COMENTARIOS</h1>
<tr>
	<td>Descripcion:</td> <td><textarea name="descrip" id="textarea" cols="60" rows="5" ><?=$descrip?></textarea></td>
</tr>
</table>

<table align="center">
<h1>11. EVOLUCION DEL PACIENTE</h1>
<tr>
	<td>Descripcion:</td> <td><textarea name="descrip" id="textarea" cols="60" rows="5" ><?=$descrip?></textarea></td>
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
			   <td><img title="Eliminar Usuario" src="../images/Eliminar.gif"/></td>
			   </tr>
				<?}?>
			</table>
</body>
</html>
