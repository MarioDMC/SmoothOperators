 <?php
    require_once '../../includes/funciones.php';
    session_start();
    error_reporting(0);
    $varsesion = $_SESSION['correo'];
    if (isset($varsesion))
    {
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <title>Sistema de Apartado Cañones</title>
    <link rel="stylesheet" href="../../css/estilo.css">
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <a class="navbar-brand" href="#">
                <img src="img/logo.svg" width="30" height="30" alt="">
            </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">@</span>
                        </div>
                        <input type="text" class="form-control" placeholder="Usuario" aria-label="Username" aria-describedby="basic-addon1" disabled>
                    </div>
                </form>
        </div>
    </nav>
    <section style="display: flex;">
        <div class="sidebar" id="sidebar">
            <nav>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item list-group-item-action active">
                        <i class="fas fa-list-ul"></i><a class="nav-link active" href="#">Apartados</a>
                    </li>
                    <li class="list-group-item list-group-item-action">
                        <i class="fas fa-user-friends"></i><a class="nav-link" href="#">Usuarios</a>
                    </li>
                    <li class="list-group-item list-group-item-action">
                        <i class="fas fa-sliders-h"></i><a class="nav-link" href="#">Configuración</a>
                    </li>
                    <li class="list-group-item list-group-item-action">
                        <i class="fas fa-sign-out-alt"></i><a class="nav-link" href="../../cerrarsesion.php">Cerrar Sesión</a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="container" id="contenedor-principal">
        	<section>
		<table class="table">
		  <thead class="thead-dark">
		    <tr>
		      <th scope="col">ID</th>
		      <th scope="col">Nombre</th>
		      <th scope="col">Estatus</th>
		    </tr>
		  </thead>
		  <tbody>
          <?php
            $row = $db->get("canones", "*");
          ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['nombre']; ?></td>
                    <td><?php echo $row['status']; ?></td>
                </tr>
            <?php
            //}
            ?>
		  </tbody>
		</table>
	</section>
        </div>
    </section>
    <footer>
        <p> <i class="fas fa-user-lock"></i> Sistema desarrollado por La Logia Corp.</p>
    </footer>
    <script src="https://use.fontawesome.com/releases/v5.10.2/js/all.js" data-auto-replace-svg="nest"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>

</html>
<?php
}else 
    {
        header("Location: ../../login.php");
    }
?>