
console.log("Bienvenido a la consola!");

//Expresiones regulares

var exDNI = /^([0-9]{8})$/
var exMatricula = /^([0-9]{1,8})$/
var  regExNombre = /^([A-Z a-z]{2,30})$/
var expreClave = /^([A-Za-z0-9]{4,16})$/ //alfanumerico de largo entre 4 y 16, permite mayusculas (no guion)
var exMail = /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i;

//Funciones de Validacion

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

function validarDNI()
{
	x = document.getElementById("dni").value;
	if (!exDNI.test(x))
	{
		document.getElementById("lDNI").style.color = "red";
		document.getElementById("errores").innerHTML = "El D.N.I. no es valido.";
		document.getElementById("errores").style.display = "block";
	}
	else
	{
		document.getElementById("lDNI").style.color = "black";
		document.getElementById("errores").style.display = "none";
	}
}

function validarMatricula()
{
	x = document.getElementById("numeroMatricula").value;
	if (!exMatricula.test(x))
	{
		document.getElementById("lnumeroMatricula").style.color = "red";
		document.getElementById("errores").innerHTML = "La matricula no es valida.";
		document.getElementById("errores").style.display = "block";
	}
	else
	{
		document.getElementById("lnumeroMatricula").style.color = "black";
		document.getElementById("errores").style.display = "none";
	}
}

function validarNombre()
{
	x = document.getElementById("nombre").value;
	if (!regExNombre.test(x))
	{
		document.getElementById("lNombre").style.color = "red";
		document.getElementById("errores").innerHTML = "El largo del nombre es entre 2 y 30 y admite unicamente letras";
		document.getElementById("errores").style.display = "block";
	}
	
	else
	{
		document.getElementById("lNombre").style.color = "black";
		document.getElementById("errores").style.display = "none";
	}
}

function validarApellido()
{
	x = document.getElementById("apellido").value;
	if (!regExNombre.test(x))
	{
		document.getElementById("lApellido").style.color = "red";
		document.getElementById("errores").innerHTML = "El largo del apellido es entre 2 y 30 y admite unicamente letras";
		document.getElementById("errores").style.display = "block";
	}
	
	else
	{
		document.getElementById("lApellido").style.color = "black";
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

function validarMail()
{
	x = document.getElementById("mail").value;
	if (!exMail.test(x))
	{
		document.getElementById("lMail").style.color = "red";
		document.getElementById("errores").innerHTML = "El formato del mail es usuario@mail.(terminacion)";
		document.getElementById("errores").style.display = "block";
	}
	
	else
	{
		document.getElementById("lMail").style.color = "black";
		document.getElementById("errores").style.display = "none";
	}
}

function validarDia()
{
	x = document.getElementById("dia").value;
	if (x==0) 
	{
		document.getElementById("nacimiento").style.color = "red";
		document.getElementById("errores").innerHTML = "No selecciono un dia";
		document.getElementById("errores").style.display = "block";
	}
	
	else
	{
		document.getElementById("nacimiento").style.color = "black";
		document.getElementById("errores").style.display = "none";
	}
}

function validarMes()
{
	x = document.getElementById("mes").value;
	if (x==0) 
	{
		document.getElementById("nacimiento").style.color = "red";
		document.getElementById("errores").innerHTML = "No selecciono el mes";
		document.getElementById("errores").style.display = "block";
	}
	
	else
	{
		document.getElementById("nacimiento").style.color = "black";
		document.getElementById("errores").style.display = "none";
	}
}

function validarAno()
{
	x = document.getElementById("ano").value;
	if (x==0) 
	{
		document.getElementById("nacimiento").style.color = "red";
		document.getElementById("errores").innerHTML = "No selecciono el anio";
		document.getElementById("errores").style.display = "block";
	}
	
	else
	{
		document.getElementById("nacimiento").style.color = "black";
		document.getElementById("errores").style.display = "none";
	}
}

function valorMasc()
{
	masculino = document.getElementById("masc").value;
	if(masculino == 0)
	{
		document.getElementById("masc").value = 1;
	}
	else{document.getElementById("masc").value = 0;}
}

function valorFem()
{
	femenino = document.getElementById("fem").value;
	if(femenino == 0)
	{
		document.getElementById("fem").value = 1;
	}
	else{document.getElementById("fem").value = 0;}
}

function validarSexo()
{
	masculino = document.getElementById("masc").value;
	femenino = document.getElementById("fem").value;
	if (masculino == femenino)
	{
		document.getElementById("lSexo").style.color = "red";
		document.getElementById("errores").innerHTML = "Seleccionar un unico sexo";
		document.getElementById("errores").style.display = "block";

	}
	
	else 
	{
		document.getElementById("lSexo").style.color = "black";
		document.getElementById("errores").style.display = "none";

	}
}

function validarEspecialidad()
{
	x = document.getElementById("especialidad").value;
	if (x==0) 
	{
		document.getElementById("lEspec").style.color = "red";
		document.getElementById("errores").innerHTML = "Seleccionar una especialidad";
		document.getElementById("errores").style.display = "block";
	}
	else
	{
		document.getElementById("lEspec").style.color = "black";
		document.getElementById("errores").style.display = "none";
	}
}

function validarPregunta()
{
	x = document.getElementById("pregunta").value;
	if (x==0) 
	{
		document.getElementById("lPregunta").style.color = "red";
		document.getElementById("errores").innerHTML = "Seleccionar una pregunta de seguridad";
		document.getElementById("errores").style.display = "block";
	}
	else
	{
		document.getElementById("lPregunta").style.color = "black";
		document.getElementById("errores").style.display = "none";
	}
}

function validarRespuesta()
{
	x = document.getElementById("respuesta").value;
	if (!regExNombre.test(x))
	{
		document.getElementById("lRespuesta").style.color = "red";
		document.getElementById("errores").innerHTML = "El largo de la respuesta es entre 2 y 30 y admite unicamente letras";
		document.getElementById("errores").style.display = "block";
	}
	
	else
	{
		document.getElementById("lRespuesta").style.color = "black";
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

	x = document.getElementById("dni").value;
	if (!exDNI.test(x))
	{
		validez = true;
	}

	x = document.getElementById("nombre").value;
	if (!regExNombre.test(x))
	{
		validez = true;
	}

	x = document.getElementById("apellido").value;
	if (!regExNombre.test(x))
	{
		validez = true;
	}

	x = document.getElementById("contraseña").value;
	if (!expreClave.test(x))
	{
		validez = true;
	}

	x = document.getElementById("mail").value;
	if (!exMail.test(x))
	{
		validez = true;
	}
	
	x = document.getElementById("dia").value;
	if (x==0)
	{
		validez = true;
	}

	x = document.getElementById("mes").value;
	if (x==0)
	{
		validez = true;
	}

	x = document.getElementById("ano").value;
	if (x==0)
	{
		validez = true;
	}

	masculino = document.getElementById("masc").value;
	femenino = document.getElementById("fem").value;
	if (masculino == femenino)
	{
		validez = true;
	}

	x = document.getElementById("pregunta").value;
	if (x==0) 
	{
		validez = true;
	}

	x = document.getElementById("respuesta").value;
	if (!regExNombre.test(x))
	{
		validez = true;
	}

	return validez;
}

function activarBotonRegistrarse()
{
	var validez = condicionBoton();
	document.getElementById("botonRegPac").disabled = validez;

}

function activarBotonRegMed()
{
	var validez = condicionBoton();
	x = document.getElementById("especialidad").value;
	if (x==0)
	{
		validez = true;
	}
	x = document.getElementById("numeroMatricula").value;
	if (!exMatricula.test(x))
	{
		validez = true;
	}
	document.getElementById("botonRegMed").disabled = validez;


}

