function checkbox(){
    // Determine si el cuadro de entrada del nombre de usuario está vacío
    // 1. Obtenga la información ingresada por el nombre de usuario id = "usuario"
    var user2 = document.getElementById('user2').value;
    // Cuando el cuadro de entrada está vacío, el mensaje de solicitud
    if(user2==""){
        alert("El nombre de usuario no puede estar vacío");
        return false;
    }
    // 2. Obtener información para ingresar la contraseña
    var password2 = document.getElementById('password2').value;
    // Cuando el cuadro de entrada está vacío, el mensaje de solicitud
    if(password2==""){
        alert("La contraseña no puede estar vacía");
        return false;
    }
    // 3. Obtenga información para confirmar la contraseña de ingreso de contraseña
    var repassword2 = document.getElementById('repassword2').value;

    if(repassword2==""){
        alert("por favor confirme la contraseña no puede venir vacia")
        return false;
    }
    // Contraseñas inconsistentes antes y después, mensaje de aviso
    if(password2!=repassword2){
        alert("Las contraseñas no coinciden");
        return false;
    }
    
    // 4. Obtenga la información del cuadro de entrada eamil,
    var email2 = document.getElementById('email2').value;

    if(email2==""){
        alert("el correo no puede estar vacio");
        return false;
    }
    // Verifica si eamil es legal, usa la expresión regular eamil
    if(!/^([a-zA-Z0-9_-])+@([a-zA-Z0-9_-])+(.[a-zA-Z0-9_-])+/.test(email2)){
        alert("El buzón es incorrecto");
        return false;
    }

    

}