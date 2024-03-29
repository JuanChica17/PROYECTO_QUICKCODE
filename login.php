<?php
$msg = null;
if(isset($_GET['err'])){

  $msg = $_GET['err'];
}
?>
<?php
session_start();
if(isset($_SESSION['tipo_usuario'])){
  header('location: index.php');
}else{?>
<!DOCTYPE html>
<html lang="es">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>UC - Iniciar Sesion</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-info">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row" style="background: yellow">
              <div class="col-lg-6">
                <img src="img/escudoUC.jpg" alt="" width="500" height="500">
              </div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Bienvenido al login de la universidad de cartagena!</h1>
                  </div>
                  <form action="validar.php" method="POST">
                    <div class="form-group">
                      <input type="email" class="form-control" id="correo" name="correo" aria-describedby="emailHelp" placeholder="Correo Electronico" required="email">
                    </div>
                    <div class="input-group">
                      <input type="password" name="contraseña" id="contraseña" class="form-control" placeholder="Contraseña" required="password">
                      <div class="input-group-append">
                        <button id="show_password" class="btn btn-primary" type="button" onclick="mostrarPassword()"> <span class="fa fa-eye-slash icon"></span> </button>
                      </div>
                    </div>
                    <br>
                    <div class="form-group">
                    <input type="text" name="tipo_usuario" value="natural">
                    </div>
                    <button class="btn btn-success btn-user btn-block" type="submit">
                      <i class="fas fa-door-open"></i>
                      Inicia Session
                    </button>
                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="small" href="jfcm_register.php">Crea una cuenta!</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>
  <script type="text/javascript">
function mostrarPassword(){
    var cambio = document.getElementById("password");
    if(cambio.type == "password"){
      cambio.type = "text";
      $('.icon').removeClass('fa fa-eye-slash').addClass('fa fa-eye');
    }else{
      cambio.type = "password";
      $('.icon').removeClass('fa fa-eye').addClass('fa fa-eye-slash');
    }
  } 
  
  $(document).ready(function () {
  //CheckBox mostrar contraseña
  $('#ShowPassword').click(function () {
    $('#Password').attr('type', $(this).is(':checked') ? 'text' : 'password');
  });
});
</script>

</body>

</html>
<?php
}
?>