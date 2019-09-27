<?php
  session_start();
  error_reporting(0);
  $varsesion = $_SESSION['correo'];
  if (!$varsesion){
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Sistema de Apartado Cañones</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/estilo.css">
</head>
<body class="text-center">
  <form class="form-signin form" id="form" method="POST">
    <img class="mb-4 logo" src="img/logo-unid.png" alt="">
    <h1 class="h3 mb-3 font-weight-normal">Ingresar</h1>
    <label for="inputEmail" class="sr-only">Correo Electronico</label>
    <input name="usuario" type="text" id="inputEmail" class="form-control" placeholder="Correo Electronico" required autofocus>
    <label namefor="inputPassword" class="sr-only">Contraseña</label>
    <input name="password" type="password" id="inputPassword" class="form-control" placeholder="Contraseña" required>
    <div class="checkbox mb-3">
      <label>
        <input name="recordar" type="checkbox" value="remember-me"> Recordarme
      </label>
    </div>
    <button class="btn btn-lg btn-primary btn-block" id="btn-login">Iniciar Sesión</button>
  </form>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://use.fontawesome.com/releases/v5.10.2/js/all.js" data-auto-replace-svg="nest"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="js/login.js"></script>
</body>
</html>
<?php
 } else {
    header("location: index.php");
  }
?>
