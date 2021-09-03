function radioSelecc(id){
	
		var radiobtn = document.getElementById(id);
		radiobtn.checked = true;
		return 0;
};

function asignarValorSelect(id, valueToSelect){

	let element = document.getElementById(id);
	element.value = valueToSelect;
	return 0;
};


function checkboxSelecc(id, valor){
	
	
		var checkbox = document.getElementById(id);
		checkbox.checked = valor;
		return 0;
	
};



		function showUser(str) {
    		if (str == "") {
        		document.getElementById("txtHint").innerHTML = "";
        		return;
    		} else {
        	if (window.XMLHttpRequest) {
           		 // code for IE7+, Firefox, Chrome, Opera, Safari
            	xmlhttp = new XMLHttpRequest();
        	} else {
           		 // code for IE6, IE5
            	xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        	}
        	xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        	};
        	xmlhttp.open("GET","tabla.inc.php?q="+str,true);
        	xmlhttp.send();
    		}
		}

        function showUser2(str) {
            if (str == "") {
                document.getElementById("txtHint").innerHTML = "";
                return;
            } else {
            if (window.XMLHttpRequest) {
                 // code for IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp = new XMLHttpRequest();
            } else {
                 // code for IE6, IE5
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
            };
            xmlhttp.open("GET","tablaPaciente.inc.php?q="+str,true);
            xmlhttp.send();
            }
        }
