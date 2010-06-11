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