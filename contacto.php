<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--AGREGUÉ-->
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Bienvenid@s">
    <meta name="theme-color" content="#000000">
    <meta name="MobileOptimized" content="width">
    <meta name="HandheldFriendly" content="true">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <!--FIN AGREGUÉ-->
    <title>Proyecto JS</title>
    <link rel="stylesheet" href="css/contacto.css">
    <link id="theme" rel="stylesheet" href="css/blue.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
    <!--AGREGUÉ-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="shortcut icon" type="image/png" href="./img/logo.png">
    <link rel="apple-touch-icon" href="./logo.png">
    <link rel="apple-touch-startup-image" href="./logo.png">
    <link rel="manifest" href="./manifest.json">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.0.7/css/all.css" rel="stylesheet">
    <!--FIN AGREGUÉ-->
</head>

<body>
    <!-- NAVBAR -->
    <div class="fixed-top" id="nav1">
        <nav class="navbar navbar-expand-md">
            <a class="navbar-brand" href="index.html">
                <img src="img/logo.png" width="80" height="80" class="d-inline-block align-top" alt="Logo CEMAIN">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav m-auto">
                    <li class="nav-item active">
                        <a class="txt-menu" href="index.html">Inicio <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="txt-menu" href="cursos.html">Cursos</a>
                    </li>
                    <li class="nav-item dropdown active">
                        <a class="txt-menu dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Conócenos</a>
                        <div class=" menu-desplegar dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="txt-menudesp dropdown-item" href="acerca.html">Acerca de...</a>
                            <div class="dropdown-divider"></div>
                            <a class="txt-menudesp dropdown-item" href="ubi.html">Ubícanos</a>
                        </div>
                    </li>
                    <li class="nav-item active">
                        <a class="txt-menu" href="contacto.php">Contacto</a>
                    </li>
                </ul>
                <span class="navbar-text text-center">
                    Visítanos: <br> Taximaroa #45 <br> Col. Félix Ireta
                </span>
            </div>
        </nav>
    </div>
    <!-- NAVBAR FIN -->
    <!-- CAROUSEL (SLIDER)-->
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/rescita.png" width="1400" height="600" alt="Prueba Diagnóstica PCR">
                <div class="carousel-caption d-none d-md-block">
                    <h3 class="txt-carousel">RESERVA TU CITA</h5>
                        <p class="txt-carousel2">Genera tu cita de valoración o para el procedimiento de tu elección.
                        </p>
                        <a href="contacto.php" class="button-more">Reserva aquí</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/curs_car.png" width="1400" height="600" alt="Antígeno de SARS-CoV-2">
                <div class="carousel-caption d-none d-md-block">
                    <h3 class="txt-carousel">CAPACÍTATE CON NOSOTROS</h3>
                    <p class="txt-carousel2">Te ofrecemos los mejores cursos con certificación y validez oficial.
                    </p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/inst_carr.png" width="1400" height="600" alt="Anticuerpos SARS-CoV-2">
                <div class="carousel-caption d-none d-md-block">
                    <h3 class="txt-carousel">EXCELENTES INSTALACIONES</h3>
                    <p class="txt-carousel2">Limpio, sanitizado y esterilizado para brindarte la mejor experiencia.
                    </p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!-- CAROUSEL (SLIDER) FIN -->
    <br><br>
    <!-- RECUADRO COLORES -->
    <div id="selector-theme">
        <div id="to-green"></div>
        <div id="to-red"></div>
        <div id="to-blue"></div>
    </div>
    <!-- RECUADRO COLORES FIN-->
    <!-- Contenido -->
    <section id="global">
        <header>
            <div class="clearfix">
            </div>
            <nav id="menu">
                <br>
                <h3> CONTACTO </h3>
            </nav>
        </header>

        <section class="container py-2 mt-3 my-4">
    <div class="container">
      <div class="row">
        <div class="col-md-12 mt-5 bg-dark item-center"> <br>         
          <p class="pb-0 mb-0 text-justify text-info text-center">En esta sección puedes reservar tus citas o dejarnos tus comentarios. Si sólo deseas información favor de llenar los campos y ponerlo como comentario. En breve nos comunicaremos contigo para confirmaciones de citas o información.</p>
          <p class="text-danger small mt-0 pt-0 text-white text-center">* Todos los campos son obligatorios</p>

          <form action="agregar1.php" method="POST" enctype="multipart/form-data">
            <div class="row form-group text-center">
              <label for="nombre" class="col-form-label col-md-3 ml-4 text-info">  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                Nombre: </label>
              <div class="col-md-8">
                <input type="text" placeholder="Ingrese el nombre del paciente" name="nombre" id="nombre" class="form-control" required>
              </div>
            </div>
            <div class="row form-group">
              <label for="tel" class="col-form-label col-md-3 ml-4 text-info"> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                Teléfono: </label>
              <div class="col-md-8">
                <input type="text" placeholder="Ingrese número de teléfono o celular" name="tel" id="tel" class="form-control" required>
              </div>
            </div>
            <div class="row form-group">
              <label for="fecha" class="col-form-label col-md-3 ml-4 text-info"> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
                Fecha: </label>
              <div class="col-md-2">
                <input type="date" placeholder="Ingrese fecha preferida para su cita" name="fecha" id="fecha" class="form-control" required>
              </div>
            </div>
            <div class="row form-group">
              <label for="servicio" class="col-form-label col-md-3 ml-4 text-info"> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                Servicio: </label>
              <div class="col-md-8">
                <input type="text" placeholder="Ingrese número(s) de servicio(s) de la siguiente lista, separados con comas" name="servicio" id="servicio" class="form-control" required>
              </div>
            </div>
            <div class="col-md-7"> 
            &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp&nbsp<a class="txt-formAdm"> &nbsp 1. Lipopapada (mesoterapia).</a> <br>
            &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp&nbsp<a class="txt-formAdm"> &nbsp 2. Remoción: Lunar, verruga o mezquino.</a> <br>
            &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp&nbsp<a class="txt-formAdm"> &nbsp 3. Rinoplastia.</a> <br>
            &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp&nbsp<a class="txt-formAdm"> &nbsp 4. Medicina general.</a> <br>
            &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp&nbsp<a class="txt-formAdm"> &nbsp 5. Odontología.</a> <br>
            &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp&nbsp<a class="txt-formAdm"> &nbsp 6. Surcos nasogenianos.</a> <br>
            &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp&nbsp<a class="txt-formAdm"> &nbsp 7. Criolipólisis.</a> <br>
            &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp&nbsp<a class="txt-formAdm"> &nbsp 8. Escleroterapia.</a> <br>
            &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp&nbsp<a class="txt-formAdm"> &nbsp 9. Lentigo solar.</a> <br>
            &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp&nbsp<a class="txt-formAdm"> 10. Fototerapia.</a> <br>
            &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp&nbsp<a class="txt-formAdm"> 11. Blefaroplastia.</a> <br>
            &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp&nbsp<a class="txt-formAdm"> 12. Pestañas 1x1.</a> <br>
            &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp&nbsp<a class="txt-formAdm"> 13. Curso aplicación de pestañas 1x1.</a> <br>
            &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp&nbsp<a class="txt-formAdm"> 14. Curso de micropigmentación estética.</a> <br>
            &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp&nbsp<a class="txt-formAdm"> 15. Curso 3 en 1.</a> <br>
            &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp&nbsp<a class="txt-formAdm"> 16. Otro (indicar en comentarios).</a>
              </div> <br>
              <div class="row form-group">
              <label for="comentarios" class="col-form-label col-md-3 ml-4 text-info"> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
                Comentarios: </label>
              <div class="col-md-8">
                <input type="text" placeholder="Ingrese comentarios adicionales" name="comentarios" id="comentarios" class="form-control">
              </div>
            </div>
            <div style="text-align: center;">
              <button type="submit" class="btn btn-info">ENVIAR DATOS</button>
            </div>
            <br><br>
          </form>
        </div>
      </div>
    </div>
        </section>  
    </section>

    <footer>
        <div class="row">
            <div class="col-md-4 mt-0">
                <img src="img\face.png" class="img-fluid rounded" width="60" height="60" alt="Facebook">
                <p class="mt-0">CEMAIN</p>
            </div>
            <div class="col-md-4 mt-0">
                <img src="img\whats.png" class="img-fluid rounded" width="30" height="30" alt="Whatsapp">
                <p class="mt-0">+52 4433152302</p>
            </div>
            <div class="col-md-4 mt-0">
                <img src="img\tel.png" class="img-fluid rounded" width="30" height="30" alt="Teléfono">
                <p class="mt-0">4433333333</p>
            </div>
        </div>
    </footer>

    <script type="text/javascript" src="js/main.js"></script>
    <!--AGREGUÉ-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>
    <script src="./script.js"></script>
    <!--FIN AGREGUÉ-->
</body>

</html>