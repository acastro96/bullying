<!DOCTYPE html>
<html lang="es">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Quebullyinghaces es una pagina didactica en la cual te puedes registrar y podrás hacer un pequeño test para identificar que tan cerca estás de hacerle bullying a tus compañeros de aula y además te damos algunos consejos para evitar esta situación">
    <meta name="author" content="Sercompnet">

    <link rel="icon" href="img/noalbullying.png">

    <title>Bullying</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/creative.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Que Bullying Haces</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <!--<li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#services">Services</a>
            </li>-->
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">Registro</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Contacto</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <header class="masthead text-center text-white d-flex">
      <div class="container my-auto">
        <div class="row">
          <div class="col-lg-10 mx-auto">
            <h1 class="text-uppercase">
              <strong>¿Que Bullying Haces?</strong>
            </h1>
            <hr>
          </div>
          <div class="col-lg-8 mx-auto">  
            <p class="text-white mb-5">Descubre con nuestro rápido cuestionario, qué tan cerca estás de causar bullying a tus compañeros de clase y que hacer para remediarlo. ¡Animate!</p>
            <a class="btn btn-light btn-xl js-scroll-trigger" href="#about">Comenzar</a>
          </div>
        </div>
      </div>
    </header>

    <section class="bg-primary" id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading text-white">Empieza registrandote</h2>
            <hr class="light my-4">
            <p class="text-white mb-4">Qué dices si antes de empezar con el cuestionario, te registras para saber un poco más acerca de ti, no te preocupes, es solo tu nombre y un par de cositas más, anímate e intentalo!</p>
          </div>
        </div>
        <form name="nuevaPersona" id="nuevaPersona" method="POST" action="guardarPersona.php">
          <div class="row">
            <div class="col-lg-3"></div>

            <div class="col-lg-6">
                <div class="form-group">
                    <label class="text-white" for="nombre">Nombre</label>
                    <input class="form-control" type="text" required id="inputWarning1"name="nombre" placeholder="Nombre" />
                </div>

                <div class="form-group">
                    <label class="text-white" for="apellido">Apellidos</label>
                    <input class="form-control" type="text" required name="apellido" placeholder="Apellidos" />
                </div>

                <div class="form-group">
                    <label class="text-white" for="tpodoc">Tipo de Documento</label>
                    <select class="form-control" name="tipodoc" required>
                        <option value="CC">CC</option>
                        <option value="TI">TI</option>
                        <option value="CE">CE</option>
                        <option value="RC">RC</option>
                    </select>
                </div>

                <div class="form-group">
                    <label class="text-white" for="numdoc">Numero de documento</label>
                    <input class="form-control" type="text" required name="numdoc" placeholder="Numero de Documento"/>
                </div>   
              </div>
          </div>

          <div class="col-lg-3"></div> 
          <div class="row">
            <div class="col-lg-5"></div>
            <div class="col-lg-3">
              <button type="submit" class="btn btn-light btn-xl">Registrarse</button>
            </div>
            <div class="col-lg-4"></div>
          </div>
        </form>

      </div>
    </section>

    <section class="p-0" id="portfolio">
      <div class="container-fluid p-0">
        <div class="row no-gutters popup-gallery">
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="img/portfolio/fullsize/7.jpg">
              <img class="img-fluid" src="img/portfolio/thumbnails/7.jpg" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Comparte
                  </div>
                  <div class="project-name">
                    Compartir es muy importante
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="img/portfolio/fullsize/8.jpg">
              <img class="img-fluid" src="img/portfolio/thumbnails/8.jpg" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Trabaja en Equipo
                  </div>
                  <div class="project-name">
                    Si trabajas en equipo obtendras mejores resultados
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="img/portfolio/fullsize/9.jpg">
              <img class="img-fluid" src="img/portfolio/thumbnails/9.jpg" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Ten buena actitud
                  </div>
                  <div class="project-name">
                    Sé positivo es importante
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="img/portfolio/fullsize/10.jpg">
              <img class="img-fluid" src="img/portfolio/thumbnails/10.jpg" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Compañerismo
                  </div>
                  <div class="project-name">
                    Siempre se bueno con tus compañeros
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="img/portfolio/fullsize/11.jpg">
              <img class="img-fluid" src="img/portfolio/thumbnails/11.jpg" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Tolerancia
                  </div>
                  <div class="project-name">
                    La tolerancia siempre nos lleva a resolver nuestros problemas
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="img/portfolio/fullsize/12.jpg">
              <img class="img-fluid" src="img/portfolio/thumbnails/12.jpg" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Respeto
                  </div>
                  <div class="project-name">
                    Siempre trata a los demás como quieres que te traten a ti
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </section>

    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading">Contactanos</h2>
            <hr class="my-4">
            <!--<p class="mb-5">Descripción</p>-->
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 ml-auto text-center">
            <i class="fa fa-phone fa-3x mb-3 sr-contact"></i>
            <p>+57 300 349 39 90</p>
          </div>
          <div class="col-lg-4 mr-auto text-center">
            <i class="fa fa-envelope-o fa-3x mb-3 sr-contact"></i>
            <p>
              <a href="mailto:your-email@your-domain.com">sergio200331@gmail.com</a>
              <a href="mailto:your-email@your-domain.com">wmovilla909@gmail.com</a>
            </p>
          </div>
        </div>
      </div>
    </section>

    <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Mensaje</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            Listo, ya estás registrado. 
          </div>
          <div class="modal-footer">
            <!--<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>-->
            <a class="btn btn-primary" href="encuesta.php">¡Empecemos!</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/creative.min.js"></script>
    <script src="js/script.js"></script>

  </body>

  

</html>
