function validar_admin(){
	if(document.form_admin.login_admin.value.length==0){
		window.alert("Tiene que introducir su Login")
		document.form_admin.login_admin.focus()
		return (false);
	}
	if(document.form_admin.pass_admin.value.length==0){
		window.alert("Tiene que introducir su Password")
		document.form_admin.pass_admin.focus()
		return (false);
	}
}
function validar_crear_usuario(){
	if(document.formulario_usuario.nombre_usuario.value.length==0){
		window.alert("Tiene que Ingresar un Nombre de Usuario")
		document.formulario_usuario.nombre_usuario.focus()
		return (false);
	}
	if(document.formulario_usuario.direccion_usuario.value.length==0){
		window.alert("Tiene que Ingresar una Direccion")
		document.formulario_usuario.direccion_usuario.focus()
		return (false);
	}
		if(document.formulario_usuario.fono_usuario.value.length==0){
		window.alert("Tiene que Ingresar el Numero de Telefono")
		document.formulario_usuario.fono_usuario.focus()
		return (false);
	}
		if(document.formulario_usuario.login_usuario.value.length==0){
		window.alert("Tiene que Ingresar un Login")
		document.formulario_usuario.login_usuario.focus()
		return (false);
	}
		if(document.formulario_usuario.contrasena_usuario.value.length==0){
		window.alert("Tiene que Ingresar una Contraseña")
		document.formulario_usuario.contrasena_usuario.focus()
		return (false);
	}
}
function validar_modificar_contrasena(){
	if(document.formulario_cambiar_contrasena.contrasena_actual.value.length==0){
		window.alert("Escriba la Contraseña Actual")
		document.formulario_cambiar_contrasena.contrasena_actual.focus()
		return (false);
	}
		if(document.formulario_cambiar_contrasena.contrasena_nueva.value.length==0){
		window.alert("Escriba la Contraseña Nueva")
		document.formulario_cambiar_contrasena.contrasena_nueva.focus()
		return (false);
	}
		if(document.formulario_cambiar_contrasena.re_contrasena_nueva.value.length==0){
		window.alert("Repita la Contraseña Nueva")
		document.formulario_cambiar_contrasena.re_contrasena_nueva.focus()
		return (false);
	}	
}
function validar_modificar_administrador(){
		if(document.formulario_administrador.nombre_administrador.value.length==0){
		window.alert("Escriba el Nombre del Nuevo Administrador")
		document.formulario_administrador.nombre_administrador.focus()
		return (false);
	}
	if(document.formulario_administrador.login_administrador.value.length==0){
		window.alert("Escriba el Login del Nuevo Administrador")
		document.formulario_administrador.login_administrador.focus()
		return (false);
	}
		if(document.formulario_administrador.contrasena_administrador.value.length==0){
		window.alert("Escriba la Contraseña del Nuevo Administrador")
		document.formulario_administrador.contrasena_administrador.focus()
		return (false);
	}
}