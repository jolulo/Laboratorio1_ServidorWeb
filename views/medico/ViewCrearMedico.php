<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Registrar médicos</title>
  <!-- Bootstrap core CSS-->
  <link href="../../resources/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="../../resources/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="../../resources/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="../../resources/css/sb-admin.css" rel="stylesheet">

</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
        <a class="navbar-brand" href="index.html">Start Bootstrap</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <!--Inicio del menu PHP-->
            <?php
                include_once "../menu.php";
                include_once "../navsuperior.php";
            ?>
            <!--fin de menu del menu PHP-->
        </div>
    </nav>
    <div class="content-wrapper">
        <div class="container-fluid">
            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#">Médicos</a>
                </li>
                <li class="breadcrumb-item active">Registrar</li>
            </ol>

            <div class="card card-register mx-auto mt-5">
                <div class="card-header">Registro de Médicos</div>
                <div class="card-body">

  <!--.......................... FORMULARIO MEDICO......................................................-->

                <form action="../../controllers/medicoController.php?accion=registrar" method="post">
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-md-2">
                                <label>ID</label>
                                <input type="text" name="identificacion" class="form-control" />
                            </div>
        
                            <div class="col-md-5">
                                <label>Nombres</label>
                                <input type="text" name="nombres" class="form-control" />
                            </div>

                            <div class="col-md-5">
                                <label>Apellidos</label>
                                <input type="text" name="apellidos" class="form-control" />
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-md-6">
                                <label>Correo</label>
                                <input type="text" name="correo" class="form-control" />
                            </div>
                            <div class="col-md-6">
                                <label>Dirección</label>
                                <input type="text" name="direccion" class="form-control" />
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-md-2">
                                <label>Teléfono</label>
                                <input type="text" name="telefono" class="form-control" />
                            </div>
                            <div class="col-md-5">
                                <label>Provincia</label>
                                <input type="text" name="departamento" class="form-control" />
                            </div>
                            <div class="col-md-5">
                                <label>Ciudad</label>
                                <input type="text" name="ciudad" class="form-control" />
                            </div>
                        </div>
                    </div>
   
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-md-4">
                                <label>Fecha de nacimiento</label>
                                <input type="date" name="fnacimiento" class="form-control" />
                            </div>
                            <div class="col-md-3">
                                <label>Género</label>
                                <select name="genero" class="form-control">
                                    <option value="F">Femenino</option>
                                    <option value="M">Masculino</option>
                                </select>
                            </div>
                            <div class="col-md-5">
                                <label>Especialidad</label>
                                <input type="text" name="especialidad" class="form-control" />
                            </div>
                        </div>
                    </div>
                    <!-- BOTON FORMULARIO -->
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-md-2">
                                <input type="submit" class="btn btn-primary btn-block" value="Registrar" >
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    <!--.......................... FIN FORMULARIO MEDICO ...................................................-->

        <?php
            include_once "../pie.php";
        ?>
        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fa fa-angle-up"></i>
        </a>
        <!-- Logout Modal-->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="login.html">Logout</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JavaScript-->
        <script src="../../resources/vendor/jquery/jquery.min.js"></script>
        <script src="../../resources/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- Core plugin JavaScript-->
        <script src="../../resources/vendor/jquery-easing/jquery.easing.min.js"></script>
        <!-- Page level plugin JavaScript-->
        <script src="../../resources/vendor/chart.js/Chart.min.js"></script>
        <script src="../../resources/vendor/datatables/jquery.dataTables.js"></script>
        <script src="../../resources/vendor/datatables/dataTables.bootstrap4.js"></script>
        <!-- Custom scripts for all pages-->
        <script src="../../resources/js/sb-admin.min.js"></script>
        <!-- Custom scripts for this page-->
        <script src="../../resources/js/sb-admin-datatables.min.js"></script>
        <script src="../../resources/js/sb-admin-charts.min.js"></script>
    </div>
</body>
</html>
