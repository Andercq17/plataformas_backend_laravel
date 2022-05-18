let btn_enviar, btn_cerrar_modal, formulario, ventana;
let correo,clave, usuario, mensaje;

function iniciarLogin(){
	btn_enviar = document.getElementById("btn_enviar");
	btn_cerrar_modal = document.getElementById("btn_cerrar_modal");
	mensaje = document.querySelector("#ventana p");
	correo = document.getElementById("correo");
	clave = document.getElementById("clave");
	ventana = document.querySelector("#ventana");
	formulario = document.getElementById("formulario");
	formulario.addEventListener("submit",procesarLogin);
	btn_cerrar_modal.addEventListener("click",cerrarVentana);
}

function abrirVentana(){
	ventana.classList.remove("hidden");
}

function cerrarVentana(evento){
	ventana.classList.add("hidden");
}

function procesarLogin(evento){

	let txt_correo,txt_clave;
	let str_usuario, md5_clave;
	let error = false;
	txt_correo = correo.value;
	txt_clave = md5(clave.value);

	str_usuario = localStorage.getItem("usuario");
	usuario = JSON.parse(str_usuario);
	
	if(usuario){
		if(usuario.correo === txt_correo && usuario.clave === txt_clave){
			mensaje.innerHTML = "Login exitoso";
		}
		else{
			error = true;
		}
	}else{
		error = true;
	}

	if(error){
		mensaje.innerHTML = "Valida los datos";
	}

	abrirVentana();
	evento.preventDefault();


	//console.log(evento.target);

}