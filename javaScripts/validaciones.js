validarCamposObligatorios();
validarSoloNumeros();
validarSoloLetras();
validarEmail();
validarCedula();

function validarCamposObligatorios(formulario){
	
	bandera = true;
		var cont = 0;

  		for(var i = 0; i < formulario.length; i++){
			var elemento = formulario.elements[i];

			if(elemento == null | elemento.value == ""){
				//alert(elemento.value);
				cont++;


				elemento.style.border = "2px solid red";
				//bandera= false;
				alert("Debe ingresar todos los campos obligarios");
				
				//break;
			}
			
		}

		if(cont == 0){
			return true;
		}else{
			document.getElementById('mensaje').innerHTML = "Error de Campos";
			return false;
		}
	bandera = validarCedula();
	bandera = validarSoloNumeros();
	bandera = validadSoloLetras();
	bandera = validarEmail();
		//return bandera;//true o false
	}


function validarSoloNumeros(tituloCampo){

	var digitos = ['0','1','2','3','4','5','6','7','8','9'];
  	var cadena = document.getElementById('lblEdad').value;
  	var caracter;
  	
  	for(var i=0; i<cadena.length; i++) {
  		
  		caracter =cadena.charAt(i);
		
		if(digitos.indexOf(caracter) < 0 ) {
		alert("Error en el campo " + tituloCampo+ ": Ingrese solamente Numeros");
			break;
			return false;
			
		}
		
	}
	return true;
}

function validarSoloLetras(tituloCampo){

	var alfabeto = ['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z'];
  	var cadenaLetras = document.getElementById('lblNombre').value;
  	var cadenaLetras3 = document.getElementById('lblApellido').value;
  	var caracter2;
  	var caracter3;
  	var esLetra = false;
  	
  	for(var i=0; i<cadenaLetras.length; i++) {

		caracter2 = cadenaLetras.charAt(i);

		if(alfabeto.indexOf(caracter2) < 0 ) {
			alert("Error en el campo " +tituloCampo+ ": Ingrese solamente Letras");
			break;
			esLetra = false;
		} 

	}

	for(var j=0; j<cadenaLetras3.length; j++) {

		caracter3 = cadenaLetras3.charAt(j);

		if(alfabeto.indexOf(caracter3) < 0 ) {
			alert("Error en el campo " +tituloCampo+ ": Ingrese solamente Letras");
			break;
			esLetra = false;
		} 

	}
	return true;
}

function validarEmail(){
	var email = document.getElementById('lblEmail').value;
	var arroba = email.indexOf('@');
	var nombreUsuario = email.substring(0,arroba-1);
	var dominio = email.substring(arroba+1,email.length);
	var parteDominio = dominio.indexOf('.');
	var caracteresValidos = 'abcdefghijklmnopqrstuvwxyz.0123456789_-';
	var caracteresEspeciales = "!#$%^&*()+=-[]\\\';,/{}|\":<>?";

	if(email.includes("@") == false){
		alert("Error de Tipeo: Falta el simbolo '@'");
		return false;
	}

	if(nombreUsuario.length < 3 || dominio.length < 3){
		alert("Error: email mal escrito o demasiado corto");
		return false;
	}

	for(var i = 0; i<nombreUsuario.length; i++){
		if (caracteresValidos.indexOf(nombreUsuario.charAt(i)) < 0) {
			alert("Error de Tipeo: Carecter invalido en el nombre del usuario del correo");
			return false;
		}
	}

	for(var i = 0; i<dominio.length; i++){
		if (caracteresValidos.indexOf(dominio.charAt(i)) < 0) {
			alert("Error de Tipeo: Carecter invalido en el dominio del correo");
			return false;
		}
	}

	for(var i = 0; i<email.length; i++){
		if (email.indexOf(" ") != -1) {
			alert("Error: el email no debe tener espacios");
			return false;
		}
	}


	 if(dominio.indexOf('.') <= 0) {
        alert("Error de Tipeo: el dominio de corro no debe inicar con '.' o falta '.' en el domnio");
        return false;
    }

   
    return true;

}

function validarCedula(){
	 var cad = document.getElementById("lblCedula").value.trim();
     var total = 0;
     var longitud = cad.length;
     var longcheck = longitud - 1;
     var ultimoDigito = cad.substring(9, 10);
     var digitoVerificador;

    if (cad !== ""){
        for(var i = 0; i < longcheck; i++){
            if (i%2 === 0) {
            	var aux = cad.charAt(i) * 2;
            	if (aux > 9) aux -= 9;
            	total += aux;
            } else {
              	total += parseInt(cad.charAt(i)); // parseInt o concatenará en lugar de sumar
            }
        }

        var Residuo = total % 10 //? 10 - total % 10 : 0;

        if(Residuo == 0){
        	digitoVerificador = 0;
        } else {
        	digitoVerificador = 10 - Residuo;
        }

        if ((ultimoDigito == digitoVerificador)&& longitud == 10) {
            alert("cedula valida");
        }else{
            alert("cedula invalida");
        
        }
    }
    return true;
}

	
/*
function validarSoloNumeros(){

  	var a=[1,2,3,4,5,6,7,8,9,10];
  	var cadena = document.getElementById('lblCedula').value;
	
	for(var i=0; i<cadena.length; i++) {
		alert(i + ': ' + cadena.charAt(i));

		    for (x=0;x<a.length;x++){
		    	document.write(a.charAt(x) + " ");
		    }
	}
}

esta de aki voyna usarrr
function validarSoloNumeros(){

	var digitos = '0123456789';
  	var cadena = document.getElementById('lblCedula').value;
  	var caracter;

  	var esDigito = false;
  	
  	for(var i=0; i<cadena.length; i++) {

		caracter = cadena.charAt(i);

		if(digitos.indexOf(caracter) != -1 ) {
		//if(caracter == 0 || caracter == 1 || caracter == 2 || caracter== 3 ||caracter == 4 ||
		//	caracter == 5 || caracter == 6 || caracter == 7 || caracter==8 ||caracter ==9 && caracter != " ") {
		//if(caracter >= 0 && caracter <=9){
			esDigito = true;
		} else{
			esDigito = false;
		}

	}
	if(esDigito == true){
		alert("son numeros");
	}else{
		alert(" No son numoers")
	}
}
*/

