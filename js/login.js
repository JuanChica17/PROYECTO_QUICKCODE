var correo = document.getElementById('email')
var contraseña = document.getElementById('password')
var formulario = document.getElementById('form')
var parrafo = document.getElementById('msg')

formulario.addEventListener("submit", e=>{
    e.preventDefault()
    let msg = ""
    let entrar = false
    let regexEmail = /^([\da-z_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/
    parrafo.innerHTML = ""
    if(regexEmail.test(correo.value)){
        msg += `el correo no es valido<br>`
        entrar = true
    }

    if(contraseña.value.length < 8){
        msg += `la contraseña no es valida`
        entrar = true
    }

    if(entrar){
        parrafo.innerHTML = msg
    }else{
        parrafo.innerHTML = "Enviado"
        window.location.href = "home.html";
    }
    console.log(entrar)
})