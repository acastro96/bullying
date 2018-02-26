
<?php

  require('conexion.php');

  $query = "SELECT preid, predesc, precod, comid, preest FROM preguntas";

  $resultado = $mysqli->query($query);

  $counter = 0;

  
  
?>


<!DOCTYPE html>

<html lang="es">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

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

  <body>

    <form name="cuestionario" method="POST">
      <br><br><br><br>
      <div class="container">
        <div class="container-fluid">
          <div class="row">
              <div class="col-lg-12">
                  <div class="text-center">
                      <h4 class="title">¿Qué Bullying Haces?</h4><hr>
                  </div>
              </div>
          </div>
          <div class="row">
              <div class="col-lg-12">
                  <center>
                      <table class="table table-hover table-bordered">
                          <thead>
                              <tr class="text-center">
                                  <th class="text-center"><label>SITUACIÓN</label></th>
                                  <th class="text-center"><label>NUNCA</label></th>
                                  <th class="text-center"><label>AVECES</label></th>
                                  <th class="text-center"><label>SIEMPRE</label></th>
                              </tr>
                          </thead>
                          <tbody>
                            <?php while ($row = $resultado->fetch_assoc()) { ?>
                              <tr>
                                  <td><label><strong><?php echo utf8_encode($row['predesc']); ?></strong></label></td>
                                  <td class="text-center"><input value="1" type="radio" name="fila<?php echo $row['preid'];?>" id="fila<?php echo $row['preid'];?>"> </td>
                                  <td class="text-center"><input value="4" type="radio" name="fila<?php echo $row['preid'];?>" id="fila<?php echo $row['preid'];?>"> </td>
                                  <td class="text-center"><input value="6" type="radio" name="fila<?php echo $row['preid'];?>" id="fila<?php echo $row['preid'];?>"> </td>
                              </tr>
                            <?php 
                              $counter++; 
                            } ?>
                          </tbody>
                      </table>
                      <button id="enviar" type="button" class="btn btn-primary btn-xl">Enviar</button>
                      <br><br><br><br>
                      <input type="hidden" name="counter" id="counter" value="<?php echo $counter?>"/>
                  </center>
              </div>
          </div>
      </div>
  </form>
    



    <div class="modal fade" id="modalBuena" tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="labelBueno">¡Bien Hecho!</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p><strong>¡Bien hecho!</strong> Sigue actuando de esta manera, nunca permitas que la ira y la rabia te hagan actuar de forma violenta.</p>
                <p>Recuerda que todos los seres humanos merecemos respeto y tu ejemplo habla más que tus palabras.</p>
          </div>
          <div class="modal-footer">
            <a class="btn btn-primary" href="index.php">Regresar a la pagina principal</a>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="modalMedia" tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="labelMedia">Tienes que mejorar</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
             <p><strong>¡Cuidado!</strong> Las agresiones físicas no son la solución a ningún problema. Debes aprender a reconocer y a respetar las</p>
              <p>diferencias. Todos los seres humanos somos distintos pero tenemos el mismo valor.</p>
          </div>
          <div class="modal-footer">
            <a class="btn btn-primary" href="index.php">Regresar a la pagina principal</a>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="modalMal" tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="labelMal">Peligro</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
             <p><strong>¡Peligro!</strong> Estos comportamientos no son aceptados ni los más favorables. Recomendamos buscar la forma de canalizar</p>
              <p>la agresividad a través de un deporte o un pasatiempo que sea de gran beneficio para ti.</p>
          </div>
          <div class="modal-footer">
            <a class="btn btn-primary" href="index.php">Regresar a la pagina principal</a>
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
