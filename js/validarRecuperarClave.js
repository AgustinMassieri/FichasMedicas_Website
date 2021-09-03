console.log("hola");
var  regExNombre = /^([A-Z a-z]{2,30})$/;
var expreClave = /^([A-Za-z0-9]{4,16})$/; //alfanumerico de largo entre 4 y 16, permite mayusculas (no guion)

function validarUsuario()
{
	var x = document.getElementById("usuarioRC").value;
	if (!regExNombre.test(x))
	{
		document.getElementById("lUsuarioRC").style.color = "red";
		document.getElementById("erroresRC").innerHTML = "El largo del usuario es entre 2 y 30 y admite unicamente letras";
		document.getElementById("erroresRC").style.display = "block";
	}
	else
	{
		document.getElementById("lUsuarioRC").style.color = "black";
		document.getElementById("erroresRC").style.display = "none";
	}
}

function activarBotonRegistrarse()
{
	var validez = false;
	var x = document.getElementById("usuarioRC").value;
	if (!regExNombre.test(x))
	{
		validez = true;
	}

	document.getElementById("botonSiguiente").disabled = validez;
}


function validarRespuesta()
{
	var x = document.getElementById("respuestaPS").value;
	if (!regExNombre.test(x))
	{
		document.getElementById("lRespuestaPS").style.color = "red";
		document.getElementById("erroresPS").innerHTML = "El largo de la respuesta es entre 2 y 30 y admite unicamente letras";
		document.getElementById("erroresPS").style.display = "block";
	}
	else
	{
		document.getElementById("lRespuestaPS").style.color = "black";
		document.getElementById("erroresPS").style.display = "none";
	}
}

function activarBotonReg()
{
	var validez = false;
	var x = document.getElementById("respuestaPS").value;
	if (!regExNombre.test(x))
	{
		validez = true;
	}

	document.getElementById("botonSig").disabled = validez;
}

