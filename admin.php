<?php
session_start();
$usuario = $_SESSION['usuario'];

if (!isset($usuario)) {
  header("location:admin.html");
} else {
  echo "";
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
  <title>Admin</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <!-- NAVBAR -->
  <div class="navbar-light bg-dark fixed-top">
    <nav class="navbar navbar-expand-md navbar-light bg-dark">
      <a class="navbar-brand ml-5">
        <img src="img/logo.png" width="65" height="60" class="d-inline-block align-top" alt="erizo">
      </a>
      <span class="navbar-text text-info ml-0">CEMAIN</span>
      <h2 class="navbar-text text-white text-center ml-5">
        &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp BIENVENIDO ADMINISTRADOR</h2>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav m-auto">
          <li class="nav-item active">
            <a class="nav-link text-white ml-5" href="logout.php"><u>Cerrar Sesión</u><span class="sr-only">(current)</span>
            </a>
          </li>
        </ul>
      </div>
    </nav>
  </div> <br>
  <!-- NAVBAR FIN -->

  <!-- SECCION 1 -->
  <section class="container py-5 mt-5 my-4">
    <div class="container">
      <div class="row">
        <div class="col-md-12 mt-5 bg-dark item-center">
          <h1 class="display-4 text-info mt-5 text-center">SISTEMA DE CITAS</h1>
          <hr class="bg-info">
          <p class="pb-0 mb-0 text-justify text-info text-center">Bienvenido Administrador, en esta sección puedes ver, dar de alta o eliminar citas.</p>
          <p class="text-danger small mt-0 pt-0 text-white text-center">* Todos los campos son obligatorios</p>

          <form action="agregar.php" method="POST" enctype="multipart/form-data">
            <div class="row form-group text-center">
              <label for="nombre" class="col-form-label col-md-3 ml-5 text-info">  &nbsp
                Nombre: </label>
              <div class="col-md-7">
                <input type="text" placeholder="Ingrese el nombre del paciente" name="nombre" id="nombre" class="form-control" required>
              </div>
            </div>
            <div class="row form-group">
              <label for="tel" class="col-form-label col-md-3 ml-5 text-info"> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                Teléfono: </label>
              <div class="col-md-7">
                <input type="text" placeholder="Ingrese número de teléfono o celular" name="tel" id="tel" class="form-control" required>
              </div>
            </div>
            <div class="row form-group">
              <label for="fecha" class="col-form-label col-md-3 ml-5 text-info"> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                Fecha: </label>
              <div class="col-md-7">
                <input type="date" placeholder="Ingrese fecha preferida para su cita" name="fecha" id="fecha" class="form-control" required>
              </div>
            </div>
            <div class="row form-group">
              <label for="servicio" class="col-form-label col-md-3 ml-5 text-info"> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                Servicio: </label>
              <div class="col-md-7">
                <input type="text" placeholder="Ingrese número de servicio de la siguiente lista (si son varios separarlos con comas):" name="servicio" id="servicio" class="form-control" required>
              </div>
            </div>
            <div class="col-md-7"> 
            &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp&nbsp<a class="txt-formAdm"> &nbsp 1. Lipopapada (mesoterapia).</a> <br>
            &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp&nbsp<a class="txt-formAdm"> &nbsp 2. Remoción: Lunar, verruga o mezquino.</a> <br>
            &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp&nbsp<a class="txt-formAdm"> &nbsp 3. Rinoplastia.</a> <br>
            &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp&nbsp<a class="txt-formAdm"> &nbsp 4. Medicina general.</a> <br>
            &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp&nbsp<a class="txt-formAdm"> &nbsp 5. Odontología.</a> <br>
            &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp&nbsp<a class="txt-formAdm"> &nbsp 6. Surcos nasogenianos.</a> <br>
            &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp&nbsp<a class="txt-formAdm"> &nbsp 7. Criolipólisis.</a> <br>
            &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp&nbsp<a class="txt-formAdm"> &nbsp 8. Escleroterapia.</a> <br>
            &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp&nbsp<a class="txt-formAdm"> &nbsp 9. Lentigo solar.</a> <br>
            &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp&nbsp<a class="txt-formAdm"> 10. Fototerapia.</a> <br>
            &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp&nbsp<a class="txt-formAdm"> 11. Blefaroplastia.</a> <br>
            &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp&nbsp<a class="txt-formAdm"> 12. Pestañas 1x1.</a> <br>
            &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp&nbsp<a class="txt-formAdm"> 13. Curso aplicación de pestañas 1x1.</a> <br>
            &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp&nbsp<a class="txt-formAdm"> 14. Curso de micropigmentación estética.</a> <br>
            &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp&nbsp<a class="txt-formAdm"> 15. Curso 3 en 1.</a> <br>
            &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp&nbsp<a class="txt-formAdm"> 16. Otro (indicar en comentarios).</a>
              </div> <br>
              <div class="row form-group">
              <label for="comentarios" class="col-form-label col-md-3 ml-5 text-info"> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                Comentarios: </label>
              <div class="col-md-7">
                <input type="text" placeholder="Ingrese comentarios adicionales" name="comentarios" id="comentarios" class="form-control">
              </div>
            </div>
            <br>
            <div style="text-align: center;">
              <button type="submit" class="btn btn-info">ENVIAR DATOS</button>
            </div>
            <br><br>
          </form>
        </div>
      </div>
    </div>

    <hr>
    <h1 class="display-4 text-dark mt-5 text-center">CITAS:</h1>
    <table class="table">
      <tr>
        <th>NOMBRE</th>
        <th>TELÉFONO</th>
        <th>FECHA</th>
        <th>SERVICIO</th>
        <th>COMENTARIOS</th>
        <th>ELIMINAR</th>
      </tr>

      <?php

      include('conexion.php');
      $sql = "SELECT * FROM cita";
      $consulta = mysqli_query($conexion, $sql);

      $i = 1;
      while ($r = mysqli_fetch_assoc($consulta)) {
        echo "<tr>
                <td>" . $r['nombre'] . "</td>
                <td>" . $r['tel'] . "</td>
                <td>" . $r['fecha'] . "</td>
                <td>" . $r['servicio'] . "</td>
                <td>" . $r['comentarios'] . "</td>
                <td><a href=\"eliminar.php?id_cita=" . $r['id_cita'] . "\"><img src=\"img/eliminar.png\"> </a></td>
              
            </tr>";
        $i++;
      }
      ?>
    </table>
  </section>

  <!-- FOOTER -->
  <footer class=" text-white mt-5 py-2 text-center bg-dark">
        <div class="container ">
            <p>CEMAIN MORELIA</p>
            <div class="row">
                <div class="col-md-12 mt-0">
                    <img src="img/logo.png" class="img-fluid rounded" width="30" height="30" alt="CEMAIN">
                </div>
            </div>
        </div>
    </footer>
  <!-- FOOTER FIN -->
  <script type="text/javascript" src="js/main.js"></script>

</body>

</html>