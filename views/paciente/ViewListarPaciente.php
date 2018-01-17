<?php
include_once "../../controllers/PacienteController.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>

  <title>Sistema de Citas Médicas</title>
  <?php
include_once "../general/header.php";
?>

  <script>
   var id=0;
   function asignarId(i){
    id = i;

   }

   function eliminarPaciente(){
    location.href="../../controllers/PacienteController.php?accion=inactivar&id="+id;

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
          <a href="#">Pacientes</a>
        </li>
        <li class="breadcrumb-item active">Listado Pacientes</li>
      </ol>

      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
             
                  <th>Identificación</th>
                  <th>Número Seguro</th>
                  <th>Nombres</th>
                  <th>Apellidos</th>
                  <th>Teléfono</th>
                  <th>Correo</th>
                  <th>estado</th>
                  <th>Acciones</th>
                </tr>
              </thead>

              <tbody>

              <?php

if (count($pacientes) > 0) {
    foreach ($pacientes as $paciente) {
        echo <<<EOT

                        <tr>
                     
                        <td>$paciente->identificacion</td>
                        <td>$paciente->num_seguro</td>
                        <td>$paciente->nombres</td>
                        <td>$paciente->apellidos</td>
                        <td>$paciente->telefono</td>
                        <td>$paciente->correo</td>
                        <td> $paciente->estado </td>
                        <td>
                        <a href="ViewDetallePaciente.php?accion=consultar&id=$paciente->id" data-toggle='tooltip' title='Ver detalle'>
                        <i class="fa fa-fw fa-eye"></i>

                      </a>
                      <a  href="ViewEditarPaciente.php?accion=consultar&id=$paciente->id" data-toggle='tooltip' title='Editar paciente'>
                      <i class="fa fa-fw fa-pencil"></i>

                    </a>
EOT;

        if($paciente->estado=="Activo"){

          echo <<<EOT
                            <a href="#" data-toggle="modal" data-target="#modalInactivarPaciente" onClick="asignarId($paciente->id);" data-toggle='tooltip' title='Inactivar'>
                            <i class="fa fa-fw fa-trash"></i>

                          </a>
                                </td>
                              </tr>
EOT;
}
    }
} else {
    ?>
                    <tr>
                    <td colspan="9">No existen registros</td>
                    </tr>
                    <?php
}
?>


              </tbody>
            </table>
</div>


  <?php

include_once "../general/footer.php";
?>
</div>

<div class="modal fade" id="modalInactivarPaciente" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
 <div class="modal-dialog" role="document">
   <div class="modal-content">
     <div class="modal-header">
       <h5 class="modal-title" id="exampleModalLabel">Inactivar Paciente</h5>
       <button class="close" type="button" data-dismiss="modal" aria-label="Close">
         <span aria-hidden="true">×</span>
       </button>
     </div>
     <div class="modal-body">¿Esta seguro de inactivar el paciente?</div>
     <div class="modal-footer">
       <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
       <a class="btn btn-primary" href="#" onClick="eliminarPaciente();">Inactivar</a>
     </div>
   </div>
 </div>
</div>

</body>

</html>

