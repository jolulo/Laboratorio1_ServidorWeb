<?php 
include_once("../../controllers/PacienteController.php");
if(!isset($paciente)){
 header("location: ViewListarPaciente.php?accion=listar");
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>SB Admin - Start Bootstrap Template</title>
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
   <?php 
  
   include_once("../menu.php");
   include_once("../navsuperior.php");
   
   ?>
   <!--fin de menu del menu PHP-->
   </div>
  </nav>


  <div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="ViewListarPaciente.php?accion=listar">Pacientes</a>
        </li>
        <li class="breadcrumb-item active">Detalle de paciente <?php echo $paciente->nombres." ".$paciente->apellidos; ?></li>
      </ol>

    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Registro de Pacientes</div>
      <div class="card-body">
        <form action="../../controllers/PacienteController.php?accion=registrar" method="post">


        <div class="form-group">
        <div class="form-row">
        <div class="col-md-3">
            <label for="identificacion">Identificación</label>
            <input class="form-control" id="identificacion" name="identificacion" value="<?php echo $paciente->identificacion;?>" type="text" aria-describedby="emailHelp" placeholder="Identificación" required readonly>
          </div>
          <div class="col-md-3">
            <label for="seguro">Número Seguro</label>
            <input class="form-control" id="seguro" name="seguro" type="text" value="<?php echo $paciente->num_seguro;?>" aria-describedby="emailHelp" placeholder="número seguro social" required  readonly>
          </div>
          <div class="col-md-3">
                <label for="exampleInputName">Nombres</label>
                <input class="form-control" id="exampleInputName" name="nombres" value="<?php echo $paciente->nombres;?>" type="text" aria-describedby="nameHelp" placeholder="Nombres" required  readonly  readonly>
           </div>
              <div class="col-md-3">
                <label for="exampleInputLastName">Apellidos</label>
                <input class="form-control" id="exampleInputLastName" name="apellidos" value="<?php echo $paciente->apellidos;?>" type="text" aria-describedby="nameHelp" placeholder="Apellidos" required  readonly>
              </div>

            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="exampleInputEmail1">Correo</label>
                <input class="form-control" id="exampleInputEmail1" type="email" value="<?php echo $paciente->correo;?>" name="correo" aria-describedby="emailHelp" placeholder="Correo" required  readonly>
              </div>

              <div class="col-md-6">
                <label for="telefono">Teléfono</label>
                <input class="form-control" id="telefono" type="tel" name="telefono" value="<?php echo $paciente->telefono;?>" aria-describedby="emailHelp" placeholder="Teléfono" required  readonly>
              </div>
           </div>
          </div>
         
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-3">
                <label for="exampleInputName">Provincia</label>
                <input class="form-control" id="provincia" type="text" name="departamento" value="<?php echo $paciente->departamento;?>" aria-describedby="nameHelp" placeholder="Provincia" required  readonly>
              </div>
              <div class="col-md-3">
                <label for="exampleInputLastName">Ciudad</label>
                <input class="form-control" id="ciudad" type="text" name="ciudad" aria-describedby="nameHelp" value="<?php echo $paciente->ciudad;?>" placeholder="Ciudad" required  readonly>
              </div>

              <div class="col-md-6">
                <label for="direccion">Dirección</label>
                <input class="form-control" id="direccion" type="address" name="direccion" aria-describedby="emailHelp" value="<?php echo $paciente->direccion;?>"  placeholder="Dirección" required  readonly>
              </div>
            </div>
          </div>
         
          <div class="form-group">
          <div class="form-row">
              <div class="col-md-6">
                <label for="direccion">Fecha nacimiento</label>
                <input class="form-control" id="f_nacimiento" type="date" value="<?php echo $paciente->f_nacimiento;?>" name="f_nacimiento" aria-describedby="emailHelp" placeholder="Fecha nacimiento" required  readonly>
              </div>
              <div class="col-md-6">
                <label for="direccion">Sexo</label>
                <input type ="text" value="<?php if($paciente->sexo =='M'){echo "Masculino";}else{ echo "Femenino";} ?>" readonly>
               
              </div>
            </div>
            </div>
          
        </form>
        
      </div>
    </div>
  

<?php 

include_once("../pie.php");
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

