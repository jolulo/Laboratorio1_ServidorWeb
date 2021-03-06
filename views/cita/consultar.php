<?php @session_start();?>
<!DOCTYPE html>
<html lang="en">

<head>

  <title>Consultar citas</title>
  <head>
  <?php
include_once "../general/header.php";
?>

  <script>
   var id=0;
   function asignarId(i){
    id = i;

   }

   function eliminarCita(){
    location.href="../../controllers/CitaController.php?accionc=inactivar&id="+id;

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
          <a href="#">Citas</a>
        </li>
        <li class="breadcrumb-item active">Consultar</li>
      </ol>

      <?php
include_once dirname(__FILE__) . "/../../controllers/CitaController.php";
$control = new CitaController();

$result = $control->consultarCitas();
$cont =1;
if ($result->num_rows > 0) {
    // output data of each row
    echo "<table class='table table-bordered' id='dataTable' width='100%' cellspacing='0'>
          <thead>
				    <tr>
				      <th>N°</th>
              <th>Servicio</th>
              <th>Motivo</th>
              <th>Fecha</th>
              <th>Hora</th>
              <th>Paciente</th>
              <th>Médico</th>
              <th>Estado</th>
              <th>Accion</th>

				    </tr>
          </thead><tbody>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>$cont</td>";
        echo "<td>" . $row['tipo_servicio'] . "</td>";
        echo "<td>" . $row['motivo'] . "</td>";
        echo "<td>" . $row['fecha_cita'] . "</td>";
        echo "<td>" . $row['hora_cita'] . "</td>";
        echo "<td>" . $row['nombre_paciente'] . "</td>";
        echo "<td>" . $row['nombre_medico'] . "</td>";
        echo "<td>".$row['estado']."</td>";
        
        echo "<td><a href='ver.php?id=" . $row['id'] . "&accionc=consultar' data-toggle='tooltip' title='Ver detalle' > <i class='fa fa-fw fa-eye'></i></a>";
        
        echo "<a href='modificar.php?id=" . $row['id'] . "&accionc=consultar' data-toggle='tooltip' title='Editar Cita'> <i class='fa fa-fw fa-pencil'></i></a>";
        if($row['estado']=="Activo"){
            echo "<a href='#' data-toggle='modal' data-toggle='tooltip' title='Cancelar cita' data-target='#modalInactivarCita' onClick='asignarId(" . $row['id'] . ");'>
            <i class='fa fa-fw fa-ban'></i>";
        }
        echo "</tr>";
        $cont++;
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

  <div class="modal fade" id="modalInactivarCita" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">Cancelar Cita</h5>
      <button class="close" type="button" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">×</span>
      </button>
    </div>
    <div class="modal-body">¿Esta seguro de cancelar la cita médica?</div>
    <div class="modal-footer">
      <button class="btn btn-secondary" type="button" data-dismiss="modal">Omitir</button>
      <a class="btn btn-primary" href="#" onClick="eliminarCita();">Cancelar Cita</a>
    </div>
  </div>
</div>
</div>
</body>

</html>
