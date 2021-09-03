console.log("Bienvenido a la consola!");


var expreClave = /^([A-Za-z0-9]{4,16})$/; //alfanumerico de largo entre 4 y 16, permite mayusculas (no guion)

function validarPassAct()
{
	var x = document.getElementById("claveActual").value;
	if (!expreClave.test(x))
	{
		document.getElementById("lClaveActual").style.color = "red";
		document.getElementById("erroresP").innerHTML = "El largo de la clave es  entre 4 y 16, y admite unicamente caracteres alfanumericos";
		document.getElementById("erroresP").style.display = "block";
	}
	else
	{
		document.getElementById("lClaveActual").style.color = "black";
		document.getElementById("erroresP").style.display = "none";
	}
}

function validarPassNv()
{
	var x = document.getElementById("claveNueva").value;
	if (!expreClave.test(x))
	{
		document.getElementById("lNueva").style.color = "red";
		document.getElementById("erroresP").innerHTML = "El largo de la clave es  entre 4 y 16, y admite unicamente caracteres alfanumericos";
		document.getElementById("erroresP").style.display = "block";
	}
	else
	{
		document.getElementById("lNueva").style.color = "black";
		document.getElementById("erroresP").style.display = "none";
	}
}

function validarRepetida()
{
	var x = document.getElementById("cRepetida").value;
	var y = document.getElementById("claveNueva").value;
	if (!expreClave.test(x))
	{
		document.getElementById("lRepetida").style.color = "red";
		document.getElementById("erroresP").innerHTML = "El largo de la clave es  entre 4 y 16, y admite unicamente caracteres alfanumericos";
		document.getElementById("erroresP").style.display = "block";
	}
	if (x != y) 
	{
		document.getElementById("lRepetida").style.color = "red";
		document.getElementById("erroresP").innerHTML = "Las claves no coinciden";
		document.getElementById("erroresP").style.display = "block";
	}
	else
	{
		document.getElementById("lRepetida").style.color = "black";
		document.getElementById("erroresP").style.display = "none";
	}
}

function activarBoton()
{
	var validez = false;
	var x = document.getElementById("claveActual").value;
	if (!expreClave.test(x))
	{
		validez = true;
	}

	var x = document.getElementById("claveNueva").value;
	if (!expreClave.test(x))
	{
		validez = true;
	}

	var x = document.getElementById("cRepetida").value;
	var y = document.getElementById("claveNueva").value;
	if (!expreClave.test(x))
	{
		validez = true;
	}
	if (x != y)
	{
		validez = true;
	}

	document.getElementById("guardarCambios").disabled = validez;
}