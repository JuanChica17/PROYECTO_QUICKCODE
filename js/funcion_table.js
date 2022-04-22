var ListarPersona = [];

function agregarPersonaSistema(pid,pnombre,papellido){
    var nuevaPersona = {
        ide : pid,
        nombre : pnombre,
        apellido : papellido
    };
    console.log(nuevaPersona);
    ListarPersona.push(nuevaPersona)
    localStorageListarPersona(ListarPersona)
}

function getListarPersona(){
    var storedListar = localStorage.getItem('localListarPersona')
    if(storedListar == null){
        ListarPersona = [];
    }else{
        ListarPersona = JSON.parse(storedListar);
    }
    return ListarPersona;
}

function localStorageListarPersona(plist){
    localStorage.setItem('localListarPersona', JSON.stringify(plist));
}