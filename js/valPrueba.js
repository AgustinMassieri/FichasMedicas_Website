var expreClave = /^([A-Za-z0-9]{4,16})$/; //alfanumerico de largo entre 4 y 16, permite mayusculas (no guion)

function validarClave()
{
	var x = document.getElementById("clave").value;
	if (!expreClave.test(x))
	{
		document.getElementById("lClave").style.color = "red";
		document.getElementById("erroresCC").innerHTML = "El largo de la clave es entre 4 y 16 y admite caracteres alfanumericos";
		document.getElementById("erroresCC").style.display = "block";
	}
	else
	{
		document.getElementById("lClave").style.color = "black";
		document.getElementById("erroresCC").style.display = "none";
	}
}

function activarBoton()
{
	var validez = false;
	var x = document.getElementById("clave").value;
	if (!expreClave.test(x))
	{
		validez = true;
	}

	document.getElementById("bCC").disabled = validez;
}