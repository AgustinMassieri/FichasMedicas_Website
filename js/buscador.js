var exDNI = /^([0-9]{8})$/;

function validarDNI()
{
	x = document.getElementById("buscador").value;
	if (!exDNI.test(x))
	{
		document.getElementById("buscador").style.borderColor = "red";
	}
	else
	{
		document.getElementById("buscador").style.borderColor = "black";
	}
}

function actBuscador()
{
	var validez = false;

	x = document.getElementById("buscador").value;
	if (!exDNI.test(x))
	{
		validez = true;
	}

	document.getElementById("botonBuscar").disabled = validez;
}