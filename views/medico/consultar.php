<?php @session_start();?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Consultar médicos</title>
  <!-- Bootstrap core CSS-->
  <link href="../../resources/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="../../resources/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="../../resources/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="../../resources/css/sb-admin.css" rel="stylesheet">

  <script>
   var id=0;
   function asignarId(i){
    id = i;

   }

   function eliminarMedico(){
    location.href="../../controllers/medicoController.php?accionm=inactivar&id="+id;

   }
  </script>
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
        <li class="breadcrumb-item active">Consultar</li>
      </ol>

      <?php
        include_once(dirname(__FILE__)."/../../controllers/medicoController.php");
        $control = new medicoController();

        $result = $control->consultarTodosMedicos();

        if ($result->num_rows > 0) {
          // output data of each row
          echo "<table class='table table-bordered'>
          <thead>
				    <tr>
				      <th>ID</th>
				      <th>Nombre</th>
              <th>Especialidad</th>
              <th>Estado</th>
              <th>Accion</th>
          
				    </tr>
          </thead><tbody>";
          while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row['identificacion'] . "</td>";
            echo "<td>" . $row['nombres'] . " " . $row['apellidos'] . "</td>";
            echo "<td>" . $row['especialidad'] . "</td>";
            if($row['estado'] == 1){
              echo "<td>Activo</td>";
            }else{
              echo "<td>Inactivo</td>";
            }
            echo "<td><a href='ver.php?id=" . $row['id'] . "&accionm=consultar' > <i class='fa fa-fw fa-eye'></i></a>";
            echo "<a href='modificar.php?id=" . $row['id'] . "&accionm=consultar' > <i class='fa fa-fw fa-pencil'></i></a>";
            echo "<a href='#' data-toggle='modal' data-target='#exampleModal' onClick='asignarId(" . $row['id'] . ");'>
            <i class='fa fa-fw fa-trash'></i>";
            echo "</tr>";
          }
          echo "</tbody></table>";
        } 
        else {
          echo "No se encontraron registros";
        }
        $control -> cerrarConexion();
      ?>

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
      <h5 class="modal-title" id="exampleModalLabel">Inactivar Médico</h5>
      <button class="close" type="button" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">×</span>
      </button>
    </div>
    <div class="modal-body">¿Esta seguro de inactivar el Médico?.</div>
    <div class="modal-footer">
      <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
      <a class="btn btn-primary" href="#" onClick="eliminarMedico();">Inactivar</a>
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
