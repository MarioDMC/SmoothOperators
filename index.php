<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Sistema de Apartado Cañones</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <nav class="navbar navbar-dark bg-dark">
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
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dropdown
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
        </div>
    </nav>
    <section>
        <aside>
        <nav>
            <ul>
                <li>Usuarios</li>
            </ul>
        </nav>
        </aside>
        <div id="contenedor-principal"></div>
    </section>
<table class="tabla">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Fecha</th>
      <th scope="col">Hora de Inicio</th>
      <th scope="col">Hora de Finalización</th>
      <th scope="col">Salón</th>
      <th scope="col">Materia</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Daniel</td>
      <td>16/09/2019</td>
      <td>02:00 pm</td>
      <td>04:30 pm</td>
      <td>302</td>
      <td>Programación Orientada a Objetos</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Mario</td>
      <td>18/09/2019</td>
      <td>03:10 pm</td>
      <td>06:45 pm</td>
      <td>102</td>
      <td>Sistemas ERP</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Karen</td>
      <td>15/09/2019</td>
      <td>10:20 am</td>
      <td>01:40 pm</td>
      <td>201</td>
      <td>Redes</td>
    </tr>
    <tr>
        <th scope="row">4</th>
        <td>Diana</td>
      <td>10/09/2019</td>
      <td>09:10 am</td>
      <td>11:22 am</td>
      <td>101</td>
      <td>Desarrollo Orientado a Objetos</td>
    </tr>
  </tbody>
</table>
    <footer>
    <p> <i class="fas fa-user-lock"></i> Sistema desarrollado por La Logia Corp.</p>
    </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.10.2/js/all.js" data-auto-replace-svg="nest"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>