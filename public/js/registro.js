let btn_enviar, btn_cerrar_modal, formulario, ventana;
let correo,clave,nombre,celular, usuario;

function iniciarRegistro(){
	btn_enviar = document.getElementById("btn_enviar");
	btn_cerrar_modal = document.getElementById("btn_cerrar_modal");
	correo = document.getElementById("correo");
	nombre = document.getElementById("nombre");
	celular = document.getElementById("celular");
	clave = document.getElementById("clave");
	ventana = document.getElementById("ventana");
	formulario = document.getElementById("formulario");
	formulario.addEventListener("submit",procesarRegistro);
	btn_cerrar_modal.addEventListener("click",cerrarVentana);

}

function abrirVentana(){
	ventana.classList.remove("hidden");
}

function cerrarVentana(evento){
	location.href = "login.html";
}

function procesarRegistro(evento){

	let txt_correo,txt_clave,txt_celular,txt_nombre;
	let str_usuario;
	txt_correo = correo.value;
	txt_nombre = nombre.value;
	txt_celular = celular.value;
	txt_clave = md5(clave.value);

	usuario = {
		correo:txt_correo,
		clave:txt_clave,
		celular:txt_celular,
		nombre:txt_nombre
	};

	str_usuario = JSON.stringify(usuario);
	localStorage.setItem("usuario",str_usuario);

	//ventana.showModal();
	abrirVentana();
	evento.preventDefault();

	//console.log(evento.target);

}