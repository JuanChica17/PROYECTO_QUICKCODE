document.querySelector('#btnGuardarPersona').addEventListener('click', guardarPersona);

function guardarPersona(){
    var ide = document.querySelector('#Id').value,
        nombre = document.querySelector('#nombre').value,
        apellido = document.querySelector('#apellido').value;

    agregarPersonaSistema(ide,nombre,apellido);
    tablaPersona();
    
}

function tablaPersona(){
    var listar = getListarPersona(),
    tbody = document.querySelector('#tablaPersona tbody')

    tbody.innerHTML = '';

    for(var i = 0; i < listar.length; i++){
        var row = tbody.insertRow(i),
        ideCelda = row.insertCell(0),
        nombrecelda = row.insertCell(1),
        apellidocelda = row.insertCell(2),
        selectCelda = row.insertCell(3);

        ideCelda.innerHTML = listar[i].ide;
        nombrecelda.innerHTML = listar[i].nombre;
        apellidocelda.innerHTML = listar[i].apellido;

        var inputSelect = document.createElement('input');
        inputSelect.type = 'radio';
        inputSelect.value = listar[i].ide;
        selectCelda.appendChild(inputSelect);

        tbody.appendChild(row);

    }
}