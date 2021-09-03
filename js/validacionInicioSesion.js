
console.log("Bienvenido a la consola!");

//Funciones de Validacion
var regExNombre = /^([A-Za-z]{2,30})$/
var expreClave = /^([A-Za-z0-9]{4,16})$/ //alfanumerico de largo entre 4 y 16, permite mayusculas (no guion)

function validarUsuario()
{
	x = document.getElementById("usuario").value;
	if (!regExNombre.test(x))
	{
		document.getElementById("lUsuario").style.color = "red";
		document.getElementById("errores").innerHTML = "El largo del usuario es entre 2 y 30 y admite unicamente letras";
		document.getElementById("errores").style.display = "block";
	}
	else
	{
		document.getElementById("lUsuario").style.color = "black";
		document.getElementById("errores").style.display = "none";
	}
}


function validarClave()
{
	x = document.getElementById("contraseña").value;
	if (!expreClave.test(x))
	{
		document.getElementById("lClave").style.color = "red";
		document.getElementById("errores").innerHTML = "El largo de la clave es entre 4 y 16, admite solamente caracteres alfanumericos";
		document.getElementById("errores").style.display = "block";
	}
	
	else
	{
		document.getElementById("lClave").style.color = "black";
		document.getElementById("errores").style.display = "none";
	}
}




//Activar boton
function condicionBoton()
{
	var validez = false;
	
	x = document.getElementById("usuario").value;
	if (!regExNombre.test(x))
	{
		validez = true;
	}


	x = document.getElementById("contraseña").value;
	if (!expreClave.test(x))
	{
		validez = true;
	}

	return validez;
}

function activarBotonRegistrarse()
{
	var validez = condicionBoton();
	document.getElementById("botonIniSesion").disabled = validez;

}

