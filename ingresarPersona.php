

<!DOCTYPE html>
<html>
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
    <form name="nuevaPersona" id="nuevaPersona" method="POST" action="guardarPersona.php">
        <div class="row">
            <div class="col-lg-12">
                <div class="form-group">
                    <div class="container">
                        <div class="col-lg-4"></div>
                        <div class="col-lg-4">
                            <h2 class="text-center">Registrarse</h2>
                            <div class="form-group">
                                <label for="nombre">Nombre</label>
                                <input class="form-control" type="text" required id="inputWarning1"name="nombre" placeholder="Nombre" />
                            </div>
                            <div class="form-group">
                                <label for="apellido">Apellidos</label>
                                <input class="form-control" type="text" required name="apellido" placeholder="Apellidos" />
                            </div>
                            <div class="form-group">
                                <label for="tpodoc">Tipo de Documento</label>
                                <select class="form-control" name="tipodoc" required>
                                    <option value="CC">CC</option>
                                    <option value="TI">TI</option>
                                    <option value="CE">CE</option>
                                    <option value="RC">RC</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="numdoc">Numero de documento</label>
                                <input class="form-control" type="text" required name="numdoc" placeholder="Numero de Documento"/>
                            </div>       

                            <button type="submit" class="btn btn-primary">Registrarse</button>
                        </div>
                        <div class="col-lg-4"></div>
                    </div>

                </div>
            </div> 
        </div>
    </form>
</body>


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
</html>