function suma(){
	var valor1 = document.getElementById('valor1').value;

    var valor2 = document.getElementById('valor2').value;

	canontotal1 = parseInt(valor1) + parseInt(valor2)

	alert("el resultado de la suma es: "+canontotal1)
}

function resta(){
	var valor1 = document.getElementById('valor1').value;

    var valor2 = document.getElementById('valor2').value;

	canontotal2 = parseInt(valor1) - parseInt(valor2)

	alert("el resultado de la resta es: "+canontotal2)
}


function multiplicacion(){
	var valor1 = document.getElementById('valor1').value;

    var valor2 = document.getElementById('valor2').value;

	canontotal3 = parseInt(valor1) * parseInt(valor2)

	alert("el resultado de la multiplicacion es: "+canontotal3)
}

function division(){
	var valor1 = document.getElementById('valor1').value;

    var valor2 = document.getElementById('valor2').value;

	canontotal4 = parseInt(valor1) / parseInt(valor2)

	alert("el resultado de la division es: "+canontotal4)
}