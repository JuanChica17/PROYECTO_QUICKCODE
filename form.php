<?php
$msg = null;
if(isset($_GET['err'])){

  $msg = $_GET['err'];
}
?>
<?php
session_start();
if(isset($_SESSION['tipo_usuario'])){
  header('location: home.php');
}else{?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina web</title>
    <link rel="stylesheet" href="./css/estilos.css">
    <link rel="stylesheet" href="./css/login.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="./js/header.js"></script>
    <script src="./js/footer.js"></script>
</head>
<body onload="myFunction()" style="margin:0;">
    <div id="loader"></div>
    <div style="display:none;" id="myDiv" class="animate-bottom">
    <my-header></my-header>
    <main>

        <div class="contenedor__todo">
            <div class="caja__trasera">
                <div class="caja__trasera-login">
                    <h3>¿Ya tienes una cuenta?</h3>
                    <p>Inicia sesión para entrar en la página</p>
                    <button id="btn__iniciar-sesion">Iniciar Sesión</button>
                </div>
                <div class="caja__trasera-register">
                    <h3>¿Aún no tienes una cuenta?</h3>
                    <p>Regístrate para que puedas iniciar sesión</p>
                    <button id="btn__registrarse">Regístrarse</button>
                </div>
            </div>

            <!--Formulario de Login y registro-->
            <div class="contenedor__login-register">
                <!--Login-->
                <form action="validar.php" method="POST" class="formulario__login">
                    <div class="form-group">
                      <input type="email" class="form-control" id="correo" name="correo" aria-describedby="emailHelp" placeholder="Correo Electronico" required="email">
                    </div>
                    <div class="input-group">
                      <input type="password" name="contraseña" id="contraseña" class="form-control" placeholder="Contraseña" required="password">
                    </div>
                    <br>
                    <div class="form-group">
                    <select class="form-control" name="tipo_usuario" id="tipo_usuario">
                        <option value="">--Seleccione--</option>
                        <option value="natural">natural</option>
                        <option value="juridica">juridica</option>
                    </select>
                    </div>
                    <button class="btn btn-success btn-user btn-block" type="submit">
                      <i class="fas fa-door-open"></i>
                      Inicia Session
                    </button>
                  </form>

                <!--Register-->
                <form action="registrar_usuario.php" method="post" class="formulario__register">
                <div class="form-group">
                  <div class="form-group">
                    <input type="text" class="form-control" id="nombre_usuario" name="nombre_usuario" placeholder="nombre usuario" required="text">
                  </div>
                  <div class="form-group">
                    <input type="email" class="form-control" id="correo" name="correo" placeholder="correo electronico" required="text">
                  </div>
                </div>
                <div class="form-group">
                  <input type="password" class="form-control" id="contraseña" name="contraseña" placeholder="contraseña" required="email">
                </div>
                <br>
                <div class="form-group">
                <select class="form-control" name="tipo_usuario" id="tipo_usuario">
                        <option value="">--Seleccione--</option>
                        <option value="natural">natural</option>
                        <option value="juridica">juridica</option>
                    </select>
                </div>
                <div class="form-group">
                  <button class="btn btn-success btn-user btn-block" type="submit">
                    Registrarse
                  </button>
                </div>
                
              </form>
            </div>
        </div>

    </main>
    <my-footer></my-footer>
    <script src="./js/loader.js"></script>
    <script src="./js/slider.js"></script>
    <script src="./js/questions.js"></script>
    <script src="./js/menu.js"></script>
    <script src="./js/registrate.js"></script>
    <script src="./js/login.js"></script>
    <script src="./js/script.js"></script>
</body>
</html>
<?php
}
?>