<?php @session_start();?>
<!DOCTYPE html>
<html lang="en">

<head>

  <title>Consultar médicos</title>
  <head>
  <?php
include_once "../general/header.php";
?>

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

      <?php
include_once "../general/navigation.php";
?>

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
include_once dirname(__FILE__) . "/../../controllers/medicoController.php";
$control = new medicoController();

$result = $control->consultarTodosMedicos();

if ($result->num_rows > 0) {
    // output data of each row
    echo "<table class='table table-bordered' id='dataTable' width='100%' cellspacing='0'>
          <thead>
				    <tr>
				      <th>Identificación</th>
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
        if ($row['estado'] == 1) {
            echo "<td>Activo</td>";
        } else {
            echo "<td>Inactivo</td>";
        }
        echo "<td><a href='ver.php?id=" . $row['id'] . "&accionm=consultar' data-toggle='tooltip' title='Ver detalle'> <i class='fa fa-fw fa-eye'></i></a>";
        echo "<a href='modificar.php?id=" . $row['id'] . "&accionm=consultar' data-toggle='tooltip' title='Editar Médico' > <i class='fa fa-fw fa-pencil'></i></a>";
        if($row['estado'] ==1){
          echo "<a href='#' data-toggle='modal' data-target='#modalInactivarMedico' data-toggle='tooltip' title='Inactivar Médico' onClick='asignarId(" . $row['id'] . ");'>
          <i class='fa fa-fw fa-trash'></i>";
        }
      
        echo "</tr>";
    }
    echo "</tbody></table>";
} else {
    echo "No se encontraron registros";
}
$control->cerrarConexion();
?>
<?php

include_once "../general/footer.php";
?>

  </div>

  <div class="modal fade" id="modalInactivarMedico" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">Inactivar Médico</h5>
      <button class="close" type="button" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">×</span>
      </button>
    </div>
    <div class="modal-body">¿Esta seguro de inactivar el Médico?</div>
    <div class="modal-footer">
      <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
      <a class="btn btn-primary" href="#" onClick="eliminarMedico();">Inactivar</a>
    </div>
  </div>
</div>
</div>
</body>

</html>
