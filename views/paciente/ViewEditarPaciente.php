<?php 
include_once("../../controllers/PacienteController.php");
if(!isset($paciente)){
 header("location: ViewListarPaciente.php?accion=listar");
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
  
  <title>Sistema de Citas Médicas</title>
  <?php
include_once "../general/header.php";
?>
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
          <a href="ViewListarPaciente.php?accion=listar">Pacientes</a>
        </li>
        <li class="breadcrumb-item active">Edición de paciente <?php echo $paciente->nombres." ".$paciente->apellidos; ?></li>
      </ol>

    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Registro de Pacientes</div>
      <div class="card-body">
        <form action="../../controllers/PacienteController.php?accion=editar&id_persona=<?php echo $paciente->id;?>&id=<?php echo $paciente->id_paciente;?>" method="post">


        <div class="form-group">
        <div class="form-row">
        <div class="col-md-3">
            <label for="identificacion">Identificación</label>
            <input class="form-control" id="identificacion" name="identificacion" value="<?php echo $paciente->identificacion;?>" type="text" aria-describedby="emailHelp" placeholder="Identificación" required >
          </div>
          <div class="col-md-3">
            <label for="seguro">Número Seguro</label>
            <input class="form-control" id="seguro" name="seguro" type="text" value="<?php echo $paciente->num_seguro;?>" aria-describedby="emailHelp" placeholder="número seguro social" required  >
          </div>
          <div class="col-md-3">
                <label for="exampleInputName">Nombres</label>
                <input class="form-control" id="exampleInputName" name="nombres" value="<?php echo $paciente->nombres;?>" type="text" aria-describedby="nameHelp" placeholder="Nombres" required    >
           </div>
              <div class="col-md-3">
                <label for="exampleInputLastName">Apellidos</label>
                <input class="form-control" id="exampleInputLastName" name="apellidos" value="<?php echo $paciente->apellidos;?>" type="text" aria-describedby="nameHelp" placeholder="Apellidos" required  >
              </div>

            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="exampleInputEmail1">Correo</label>
                <input class="form-control" id="exampleInputEmail1" type="email" value="<?php echo $paciente->correo;?>" name="correo" aria-describedby="emailHelp" placeholder="Correo" required  >
              </div>

              <div class="col-md-6">
                <label for="telefono">Teléfono</label>
                <input class="form-control" id="telefono" type="tel" name="telefono" value="<?php echo $paciente->telefono;?>" aria-describedby="emailHelp" placeholder="Teléfono" required  >
              </div>
           </div>
          </div>
         
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-3">
                <label for="exampleInputName">Provincia</label>
                <input class="form-control" id="provincia" type="text" name="departamento" value="<?php echo $paciente->departamento;?>" aria-describedby="nameHelp" placeholder="Provincia" required  >
              </div>
              <div class="col-md-3">
                <label for="exampleInputLastName">Ciudad</label>
                <input class="form-control" id="ciudad" type="text" name="ciudad" aria-describedby="nameHelp" value="<?php echo $paciente->ciudad;?>" placeholder="Ciudad" required  >
              </div>

              <div class="col-md-6">
                <label for="direccion">Dirección</label>
                <input class="form-control" id="direccion" type="address" name="direccion" aria-describedby="emailHelp" value="<?php echo $paciente->direccion;?>"  placeholder="Dirección" required  >
              </div>
            </div>
          </div>
         
          <div class="form-group">
          <div class="form-row">
              <div class="col-md-4">
                <label for="direccion">Fecha nacimiento</label>
                <input class="form-control" id="f_nacimiento" type="date" value="<?php echo $paciente->f_nacimiento;?>" name="f_nacimiento" aria-describedby="emailHelp" placeholder="Fecha nacimiento" required  >
              </div>
              <div class="col-md-4">
                <label for="direccion">Sexo</label>
                <select class="form-control" name="sexo">
                <option value="M" <?php if($paciente->sexo=="M"){ echo "selected";}?>>Masculino</option>
                <option value="F" <?php if($paciente->sexo=="F"){ echo "selected";}?>>Fenenino</option>
              </select>
              
              </div>
              <div class="col-md-4">
                <label for="direccion">Estado</label>
                <select class="form-control" name="estado">
                <option value="1" <?php if($paciente->estado=="Activo"){ echo "selected";}?>>Activo</option>
                <option value="0" <?php if($paciente->estado=="Inactivo"){ echo "selected";}?>>Inactivo</option>
              </select>
              
              </div>
            </div>
            </div>
            <input type="submit" class="btn btn-primary btn-block" value="Actualizar Datos" >

        </form>
        
      </div>
    </div>
  

<?php

include_once "../general/footer.php";
?>
</div>
</body>

</html>

